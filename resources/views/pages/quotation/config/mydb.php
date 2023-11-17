<?php
date_default_timezone_set("Europe/London");
class MyDatabaseConn {

    protected $connection;
	protected $query;
    protected $show_errors = TRUE;
    protected $query_closed = TRUE;
	public $query_count = 0;

	public function __construct($dbhost = 'wordpressdb-i.hosting.stackcp.net', $dbuser = 'SCWORDPRESS-3132399b7b', $dbpass = 'sx?zB€QN5M9d', $dbname = 'SCWORDPRESS-3132399b7b', $charset = 'utf8') {
	// public function __construct($dbhost = 'localhost', $dbuser = 'root', $dbpass = '', $dbname = 'novapartners', $charset = 'utf8') {
			$this->connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
		if ($this->connection->connect_error) {
			$this->error('Failed to connect to MySQL - ' . $this->connection->connect_error);
		}
		$this->connection->set_charset($charset);
	}

    public function query($query) {
        if (!$this->query_closed) {
            $this->query->close();
        }
		if ($this->query = $this->connection->prepare($query)) {
            if (func_num_args() > 1) {
                $x = func_get_args();
                $args = array_slice($x, 1);
				$types = '';
                $args_ref = array();
                foreach ($args as $k => &$arg) {
					if (is_array($args[$k])) {
						foreach ($args[$k] as $j => &$a) {
							$types .= $this->_gettype($args[$k][$j]);
							$args_ref[] = &$a;
						}
					} else {
	                	$types .= $this->_gettype($args[$k]);
	                    $args_ref[] = &$arg;
					}
                }
				array_unshift($args_ref, $types);
                call_user_func_array(array($this->query, 'bind_param'), $args_ref);
            }
            $this->query->execute();
           	if ($this->query->errno) {
				$this->error('Unable to process MySQL query (check your params) - ' . $this->query->error);
           	}
            $this->query_closed = FALSE;
			$this->query_count++;
        } else {
            $this->error('Unable to prepare MySQL statement (check your syntax) - ' . $this->connection->error);
        }
		return $this;
    }


	public function fetchAll($callback = null) {
	    $params = array();
        $row = array();
	    $meta = $this->query->result_metadata();
	    while ($field = $meta->fetch_field()) {
	        $params[] = &$row[$field->name];
	    }
	    call_user_func_array(array($this->query, 'bind_result'), $params);
        $result = array();
        while ($this->query->fetch()) {
            $r = array();
            foreach ($row as $key => $val) {
                $r[$key] = $val;
            }
            if ($callback != null && is_callable($callback)) {
                $value = call_user_func($callback, $r);
                if ($value == 'break') break;
            } else {
                $result[] = $r;
            }
        }
        $this->query->close();
        $this->query_closed = TRUE;
		return $result;
	}

	public function fetchArray() {
	    $params = array();
        $row = array();
	    $meta = $this->query->result_metadata();
	    while ($field = $meta->fetch_field()) {
	        $params[] = &$row[$field->name];
	    }
	    call_user_func_array(array($this->query, 'bind_result'), $params);
        $result = array();
		while ($this->query->fetch()) {
			foreach ($row as $key => $val) {
				$result[$key] = $val;
			}
		}
        $this->query->close();
        $this->query_closed = TRUE;
		return $result;
	}

	public function close() {
		return $this->connection->close();
	}

    public function numRows() {
		$this->query->store_result();
		return $this->query->num_rows;
	}

	public function affectedRows() {
		return $this->query->affected_rows;
	}

    public function lastInsertID() {
    	return $this->connection->insert_id;
    }

    public function error($error) {
        if ($this->show_errors) {
            exit($error);
        }
    }

	private function _gettype($var) {
	    if (is_string($var)) return 's';
	    if (is_float($var)) return 'd';
	    if (is_int($var)) return 'i';
	    return 'b';
	}

	public function show_greetings()
	{
		$current_time = date("H");
		if($current_time < 12)
			$greeting_text = "morning";
		elseif($current_time > 11 && $current_time <= 18)   
			$greeting_text = "afternoon";  
		else
			$greeting_text = "evening";   

			return $greeting_text;
	}

	public function get_contacts($contact_id="")
	{
		$where = "";
		if($contact_id > 0)
			$where = " AND _LeadsContactID = " . $contact_id;

		$query = $this->query("SELECT `_LeadsContactID`, `_LeadsContactTitle`, `_LeadsContactFirstName`, `_LeadsContactLastName`, `_LeadsContactDOB`, `_LeadsContactEmail`, `_LeadsContactPhone`, `_LeadsContactAltPhone`, `_LeadsContactAddress`, `_LeadsContactAddress2`, `_LeadsContactCity`, `_LeadsContactCounty`, `_LeadsContactPostcode`, `_LeadsContactPrefEmail`, `_LeadsContactPrefPhone`, `_LeadsContactPrefSMS`, `_LeadsContactAddedOn`, `_LeadsContactAddedBy`, `_LeadsContactStatus` FROM `np_leads_contact` WHERE `_LeadsContactStatus` = 1" . $where);
		$data = $this->fetchAll($query);
		if($contact_id > 0)
			return $data[0];
		else
			return $data;
	}

}

?>