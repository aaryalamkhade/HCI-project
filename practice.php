<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
@import url("https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Inter", sans-serif;
}
a {
  text-decoration: none;
}
body {
  width: 100%;
  min-height: 100vh;
  transition: 0.3s ease-in-out;
}
body.dark {
  background: #20222f;
}
body.light {
  background: #f8f9fe;
}
.maindiv {
  margin: 2rem 12rem;
}
.maindiv .header {
  display: flex;
  justify-content: space-between;
  margin-bottom: 3rem;
}
.header .text h1 {
  font-weight: 600;
  font-size: 1.8rem;
}
.dark .header .text h1 {
  color: #fcfdfe;
}
.light .header .text h1 {
  color: #4a4a52;
  font-weight: 700;
}
.header .text h3 {
  font-size: 0.9rem;
  font-weight: 700;
  margin-top: 0.4rem;
}
.dark .header .text h3 {
  color: #80849f;
}
.light .header .text h3 {
  color: #676a75;
}
.header .buttonbox {
  display: flex;
  align-items: center;
}
.header .buttonbox p {
  margin-right: 0.8rem;
  font-size: 0.9rem;
  font-weight: 500;
}
.dark .header .buttonbox p {
  color: #fbfefe;
}
.light .header .buttonbox p {
  color: #9ea3b3;
  font-weight: 600;
}
.herocardbox {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  margin-bottom: 3rem;
}
.eachherocard {
  margin: 1rem 0;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 2rem 2rem 1.5rem;
  color: white;
  border-radius: 0.3rem;
  position: relative;
  width: 16rem;
  cursor: pointer;
  transition: 0.3s ease-in-out;
  transform: scale(0);
  opacity: 0;
}
.dark .eachherocard {
  background: #252b43;
}
.light .eachherocard {
  background: #f0f3fa;
}
.dark .eachherocard:hover {
  background: #333a56;
}
.light .eachherocard:hover {
  background: #e1e3f0;
}
.eachherocard .handle {
  color: #888fad;
  font-size: 0.75rem;
  font-weight: 700;
  margin-bottom: 1rem;
}
.eachherocard .handle img {
  vertical-align: middle;
  margin-right: 0.5rem;
}
.eachherocard .count {
  font-size: 3.5rem;
  font-weight: 700;
}
.dark .eachherocard .count {
  color: #ffffff;
}
.light .eachherocard .count {
  color: #1b1e27;
}
.eachherocard .follower {
  font-size: 0.8rem;
  letter-spacing: 4px;
  text-transform: uppercase;
  color: #b1b0b0;
  margin: 0.2rem 0 1rem;
  font-weight: 500;
}
.eachherocard .update {
  font-size: 0.8rem;
  font-weight: 600;
  margin-top: 0.5rem;
}
.update.up {
  color: hsl(163, 72%, 41%);
}
.update.down {
  color: hsl(356, 69%, 56%);
}
.eachherocard .update img {
  vertical-align: middle;
  margin-right: 0.3rem;
}
.fb::before,
.ig::before,
.tw::before,
.yt::before {
  content: "";
  height: 0.3rem;
  width: 100%;
  top: 0;
  position: absolute;
  border-radius: 0.3rem 0.3rem 0 0;
}
.fb::before {
  background: hsl(208, 92%, 53%);
}
.tw::before {
  background: hsl(203, 89%, 53%);
}
.ig::before {
  background: linear-gradient(to right, hsl(37, 97%, 70%), hsl(329, 70%, 58%));
}
.yt::before {
  background: hsl(348, 97%, 39%);
}
.cardbox h2 {
  font-weight: 600;
  font-size: 1.6rem;
  margin-bottom: 1rem;
}
.dark .cardbox h2 {
  color: #ececec;
}
.light .cardbox h2 {
  color: #666978;
}
.detailcardbox {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
}
.eachdetailcard {
  display: flex;
  flex-direction: column;
  padding: 1.5rem;
  width: 16rem;
  border-radius: 0.5rem;
  margin: 1rem 0;
  cursor: pointer;
  transition: 0.3s ease-in-out;
  transform: scale(0);
  opacity: 0;
}
.dark .eachdetailcard {
  background: #252b43;
}
.dark .eachdetailcard:hover {
  background: #333a56;
}
.light .eachdetailcard {
  background: #f0f3fa;
}
.light .eachdetailcard:hover {
  background: #e1e3f0;
}
.eachdetailcard .topline {
  display: flex;
  justify-content: space-between;
  margin-bottom: 1.5rem;
}
.eachdetailcard .title {
  font-weight: 600;
  font-size: 0.9rem;
}
.dark .eachdetailcard .title {
  color: #8389a0;
}
.light .eachdetailcard .title {
  color: #444446;
}
.eachdetailcard .bottomline {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.eachdetailcard .bottomline .count {
  font-size: 2.3rem;
  font-weight: 600;
}
.dark .eachdetailcard .bottomline .count {
  color: #fcfcfe;
}
.light .eachdetailcard .bottomline .count {
  color: #101010;
}
.eachdetailcard .bottomline .update {
  font-size: 0.8rem;
  font-weight: 600;
  margin-top: 0.5rem;
}
.eachdetailcard .bottomline .update img {
  vertical-align: middle;
  margin-right: 0.3rem;
}
.attribution {
  text-align: right;
  line-height: 1.5;
  font-size: 0.9rem;
  padding: 0 1rem 1rem 0;
}
.dark .attribution {
  color: white;
}
.light .attribution {
  color: black;
}
.attribution a {
  font-weight: 500;
}
.dark .attribution a {
  color: whitesmoke;
}
.light .attribution a {
  color: grey;
}
.animated {
  transform: scale(1);
  opacity: 1;
}
.switch {
  position: relative;
  display: inline-block;
  width: 54px;
  height: 26px;
}

.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  -webkit-transition: 0.4s;
  transition: 0.4s;
}
.dark .slider {
  background: linear-gradient(to right, hsl(210, 78%, 56%), hsl(146, 68%, 55%));
}
.light .slider {
  background: #3ca8c6;
}
.slider:before {
  position: absolute;
  content: "";
  height: 20px;
  width: 20px;
  left: 4px;
  bottom: 3px;
  background-color: #3a3959;
  -webkit-transition: 0.4s;
  transition: 0.4s;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196f3;
}
input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}
.slider.round {
  border-radius: 34px;
}
.slider.round:before {
  border-radius: 50%;
}
.dark .slider.round:before {
  background: #303954;
}
.light .slider.round:before {
  background: white;
}
@media only screen and (max-width: 1450px) {
  .maindiv {
    margin: 2rem 6rem;
  }
}
@media only screen and (max-width: 1250px) {
  .maindiv {
    margin: 2rem 2rem;
  }
}
@media only screen and (max-width: 850px) {
  .maindiv {
    margin: 2rem 6rem;
  }
}
@media only screen and (max-width: 750px) {
  .maindiv {
    margin: 2rem 2rem;
  }
}
@media only screen and (max-width: 600px) {
  .eachherocard,
  .eachdetailcard {
    width: 100%;
  }
  .maindiv .header {
    flex-direction: column;
  }
  .maindiv .header .text {
    padding-bottom: 1rem;
    border-bottom: 1px solid #84848496;
    margin-bottom: 1rem;
  }
  .header .buttonbox {
    justify-content: space-between;
  }
}

	</style>
</head>
<body>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <base href="https://raw.githubusercontent.com/RahulSahOfficial/dashboard/main/">
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="./images/favicon-32x32.png"
    />
    <title>Frontend Mentor | Social Media Dashboard</title>
  </head>
  <body class="dark">
    <div class="maindiv">
      <div class="header">
        <div class="text">
          <h1>Social Media Dashboard</h1>
          <h3>Total Followers: 23,004</h3>
        </div>
        <div class="buttonbox">
          <p>Dark Mode</p>
          <label class="switch">
            <input type="checkbox" id="darkmode" checked />
            <span class="slider round"></span>
          </label>
        </div>
      </div>
      <div class="cardbox">
        <div class="herocardbox">
          <div class="eachherocard animate fb">
            <p class="handle">
              <img src="images/icon-facebook.svg" alt="social" />@nathanf
            </p>
            <p class="count">1987</p>
            <p class="follower">Followers</p>
            <p class="update up">
              <img src="images/icon-up.svg" alt="UP" />12 Today
            </p>
          </div>
          <div class="eachherocard animate tw">
            <p class="handle">
              <img src="images/icon-twitter.svg" alt="social" />@nathanf
            </p>
            <p class="count">1044</p>
            <p class="follower">Followers</p>
            <p class="update up">
              <img src="images/icon-up.svg" alt="UP" />99 Today
            </p>
          </div>
          <div class="eachherocard animate ig">
            <p class="handle">
              <img src="images/icon-instagram.svg" alt="social" />@realnathanf
            </p>
            <p class="count">11k</p>
            <p class="follower">Followers</p>
            <p class="update up">
              <img src="images/icon-up.svg" alt="UP" />1099 Today
            </p>
          </div>
          <div class="eachherocard animate yt">
            <p class="handle">
              <img src="images/icon-youtube.svg" alt="social" />Nathan F.
            </p>
            <p class="count">8239</p>
            <p class="follower">Subscribers</p>
            <p class="update down">
              <img src="images/icon-down.svg" alt="DOWN" />144 Today
            </p>
          </div>
        </div>
        <h2>Overview - Today</h2>
        <div class="detailcardbox">
          <div class="eachdetailcard animate">
            <div class="topline">
              <p class="title">Page Views</p>
              <img src="images/icon-facebook.svg" alt="social logo" />
            </div>
            <div class="bottomline">
              <p class="count">87</p>
              <p class="update up">
                <img src="images/icon-up.svg" alt="UP" />3%
              </p>
            </div>
          </div>
          <div class="eachdetailcard animate">
            <div class="topline">
              <p class="title">Likes</p>
              <img src="images/icon-facebook.svg" alt="social logo" />
            </div>
            <div class="bottomline">
              <p class="count">52</p>
              <p class="update down">
                <img src="images/icon-down.svg" alt="DOWN" />2%
              </p>
            </div>
          </div>
          <div class="eachdetailcard animate">
            <div class="topline">
              <p class="title">Likes</p>
              <img src="images/icon-instagram.svg" alt="social logo" />
            </div>
            <div class="bottomline">
              <p class="count">5462</p>
              <p class="update up">
                <img src="images/icon-up.svg" alt="UP" />2257%
              </p>
            </div>
          </div>
          <div class="eachdetailcard animate">
            <div class="topline">
              <p class="title">Profile Views</p>
              <img src="images/icon-facebook.svg" alt="social logo" />
            </div>
            <div class="bottomline">
              <p class="count">52k</p>
              <p class="update up">
                <img src="images/icon-up.svg" alt="UP" />1375%
              </p>
            </div>
          </div>
          <div class="eachdetailcard animate">
            <div class="topline">
              <p class="title">Retweets</p>
              <img src="images/icon-twitter.svg" alt="social logo" />
            </div>
            <div class="bottomline">
              <p class="count">117</p>
              <p class="update up">
                <img src="images/icon-up.svg" alt="UP" />303%
              </p>
            </div>
          </div>
          <div class="eachdetailcard animate">
            <div class="topline">
              <p class="title">Likes</p>
              <img src="images/icon-twitter.svg" alt="social logo" />
            </div>
            <div class="bottomline">
              <p class="count">507</p>
              <p class="update up">
                <img src="images/icon-up.svg" alt="UP" />553%
              </p>
            </div>
          </div>
          <div class="eachdetailcard animate">
            <div class="topline">
              <p class="title">Likes</p>
              <img src="images/icon-youtube.svg" alt="social logo" />
            </div>
            <div class="bottomline">
              <p class="count">107</p>
              <p class="update down">
                <img src="images/icon-down.svg" alt="DOWN" />19%
              </p>
            </div>
          </div>
          <div class="eachdetailcard animate">
            <div class="topline">
              <p class="title">Total Views</p>
              <img src="images/icon-youtube.svg" alt="social logo" />
            </div>
            <div class="bottomline">
              <p class="count">1407</p>
              <p class="update down">
                <img src="images/icon-down.svg" alt="DOWN" />12%
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="attribution">
      Challenge by
      <a href="https://www.frontendmentor.io?ref=challenge" target="_blank"
        >Frontend Mentor</a
      >. <br />
      Coded by
      <a href="https://www.instagram.com/developer_sah/" target="_blank"
        >Rahul Sah</a
      >.
    </div>
  </body>
</html>

<script >
	darkmode = document.querySelector("#darkmode");
body = document.querySelector("body");
animate = document.querySelectorAll(".animate");
darkmode.addEventListener("click", changemode);
start_animation();

function start_animation() {
  for (let i = 0; i < animate.length; i++) {
    setTimeout(function () {
      animate[i].classList.add("animated");
    }, 200 * i + 200);
  }
}

function changemode() {
  if (darkmode.checked) {
    body.classList.remove("light");
    body.classList.add("dark");
  } else {
    body.classList.remove("dark");
    body.classList.add("light");
  }
  animate.forEach(function (each) {
    each.classList.remove("animated");
  });
  start_animation();
}

</script>

</body>
</html>