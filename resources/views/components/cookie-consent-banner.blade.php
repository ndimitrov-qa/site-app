<style>
.wrapper {
  position: fixed;
  bottom: 0px;
  right: -370px;
  max-width: 345px;
  width: 100%;
  background: #fff;
  border-radius: 8px;
  padding: 15px 25px 22px;
  transition: right 0.3s ease;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  z-index: 100;
}
.wrapper.show {
  right: 20px;
}
.wrapper header {
  display: flex;
  align-items: center;
  column-gap: 15px;
}
header i {
  color: #4070f4;
  font-size: 32px;
}
header h2 {
  color: #0264bb;
  font-weight: 500;
}
.wrapper .data {
  margin-top: 16px;
}
.wrapper .data p {
  color: #333;
  font-size: 16px;
}
.data p a {
  color: #4070f4;
  text-decoration: none;
}
.data p a:hover {
  text-decoration: underline;
}
.wrapper .buttons {
  margin-top: 16px;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.buttons .button {
  border: none;
  color: #fff;
  padding: 8px 0;
  border-radius: 4px;
  background: #4070f4;
  cursor: pointer;
  width: calc(100% / 2 - 10px);
  transition: all 0.2s ease;
}
.buttons #acceptBtn:hover {
  background-color: #0264bb;
}
#declineBtn {
  border: 2px solid #4070f4;
  background-color: #fff;
  color: #4070f4;
}
#declineBtn:hover {
  background-color: #4070f4;
  color: #fff;
}
</style>

<div class="wrapper">
    <header>
        <i class="bx bx-cookie"></i>
        <h2>Cookies Consent</h2>
    </header>

    <div class="data">
        <p class="text-secondary fs-8 open-sans" >This website use cookies to help you have a superior and more relevant browsing experience on the website.
            <a href="#"> Read more...</a>
        </p>
    </div>

    <div class="buttons">
        <button class="button" id="acceptBtn">Accept</button>
        <button class="button" id="declineBtn">Decline</button>
    </div>
</div>
