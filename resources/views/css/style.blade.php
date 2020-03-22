<style>
/*
    Table of Context
    -------------------------------
    01. Common CSS
    02. Content Box
    03. Video Box
    04. Icon Box
    05. Order, Unorder List
    06. Round One side
    07. Overlap Image Box
    08. Image Box
    09. Icon list block
    
    01. Header style
    02. Banner style
    03. Send money 
    04. Receive money 
    05. Payment section
    06. Features section
    07. Testimonial section
    08. Currency form
    09. Bill form 
    10. Receive Form
    11. Services section
    12. Access Money section
    13. Online payment section
    14. Video section
    15. Partners section
    16. App section
    16. Bill Categories
    17. Our process section
    18. Accordion section
    19. Payment system works section
    20. Landing overview section
    21. System works section
    22. Common tab navigation
    23. List tab nav
    24. Benefits section
    25. Fun facts section
    26. Package section
    27. Package Table
    28. About overview section
    29. Mission & Vision section
    30. Banking partners section
    31. Team section
    32. Faq page section
    33. Contact section
    34. Contact Media section
    35. Blog Post section
    36. Pagination
    37. Breadcrumb
    38. Sidebar
    39. Blog single post section
    40. 434 Error section
    41. Signup Login form section
    42. Coming section
    43. Signup Login form section 
    44. Footer
*/
@import url("https://fonts.googleapis.com/css?family=Rubik:300,400,500,700&display=swap");
* {
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  color: #6c6c6f;
  background-color: #fff;
  font-family: 'Rubik', sans-serif;
  font-weight: 400;
  font-size: 16px;
  line-height: 28px;
}

a {
  -webkit-transition: all 300ms ease-in-out;
  -o-transition: all 300ms ease-in-out;
  transition: all 300ms ease-in-out;
}

a:hover, a:focus {
  text-decoration: none;
  outline: 0px;
}

a:focus, button:focus, input:focus, select:focus {
  outline: 0 !important;
}

h1, h2, h3, h4, h5, h6 {
  font-family: 'Rubik', sans-serif;
  font-weight: 500;
}

h2 {
  color: #262934;
  font-size: 36px;
}

img {
  display: block;
  width: 100%;
  height: auto;
  position: relative;
}

ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

figure {
  margin: 0;
}

section {
  display: block;
  position: relative;
  padding: 100px 0;
  width: 100%;
}

/**
 *
 * Common CSS
 *
 */
@media screen and (max-width: 767px) {
  section {
    padding-bottom: 50px;
  }
}

@media screen and (min-width: 768px) {
  .nopadd-ltf {
    padding-left: 0;
  }
  .nopadd-rth {
    padding-right: 0;
  }
  .nopadd {
    padding-left: 0;
    padding-right: 0;
  }
}

.nopadd-btm {
  padding-bottom: 0 !important;
}

.btn {
  color: #fff;
  display: inline-block;
  font-size: 16px;
  font-weight: 500;
  line-height: 0.8;
  text-transform: capitalize;
  min-width: 200px;
  padding: 20px 25px;
  position: relative;
  overflow: hidden;
}

@media screen and (min-width: 992px) {
  .btn:first-of-type {
    margin-right: 25px;
  }
}

.btn-filled {
  background-color: #256be6;
}

.btn-filled:hover {
  background-color: #123d88;
  -webkit-box-shadow: 0 0 30px 5px rgba(0, 0, 0, 0.05);
  box-shadow: 0 0 30px 5px rgba(0, 0, 0, 0.05);
}

.btn-filled:hover i {
  color: #000;
  position: relative;
  z-index: 9;
}

.btn-default {
  background-color: #d10936;
  border-radius: 50px;
  color: #fff;
  -webkit-transition: all .5s;
  -o-transition: all .5s;
  transition: all .5s;
}

.btn-default:hover {
  -webkit-box-shadow: 0 0 30px 5px rgba(0, 0, 0, 0.05);
  box-shadow: 0 0 30px 5px rgba(0, 0, 0, 0.05);
}

.btn-round, .iconBox .btn {
  border-radius: 50px;
}

.btn-outline {
  border: 2px solid #fff;
}

.btn:focus {
  -webkit-box-shadow: none;
  box-shadow: none;
}

.btn.icon-left i {
  line-height: .8;
  margin-right: 20px;
}

.btn span {
  position: relative;
  z-index: 2;
}

.btn span.bh {
  background: #fff;
  border: 10px solid #f13963;
  border-radius: 50%;
  display: block;
  height: 0;
  position: absolute;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  -webkit-transition: width 0.7s ease 0s, height 0.7s ease 0s;
  -o-transition: width 0.7s ease 0s, height 0.7s ease 0s;
  transition: width 0.7s ease 0s, height 0.7s ease 0s;
  width: 0;
  z-index: 1;
  opacity: 0;
}

.btn:hover span.bh {
  height: 500px;
  width: 500px;
  opacity: 1;
}

.circle-cursor {
  pointer-events: none;
  width: 30px;
  height: 30px;
  border-radius: 50%;
  position: absolute;
  background: #000;
  font-size: 20px;
  text-align: center;
  -webkit-transition: linear .2s;
  -o-transition: linear .2s;
  transition: linear .2s;
  z-index: 9999999;
  top: 0;
  text-transform: uppercase;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  opacity: .5;
}

.tagline {
  color: #ec5564;
  display: block;
  font-size: 14px;
  font-weight: 500;
  text-transform: uppercase;
  margin-bottom: 10px;
  position: relative;
}

@media screen and (max-width: 991px) {
  .tagline {
    font-size: 12px;
  }
}

.tagline.bar {
  padding-left: 70px;
}

.tagline.bar:after {
  background-color: #256be6;
  content: '';
  position: absolute;
  top: 50%;
  left: 0;
  right: 0;
  bottom: 0;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  height: 2px;
  width: 50px;
}

@media screen and (min-width: 992px) {
  .mb100 {
    margin-bottom: 100px;
  }
}

.bg-offwhite {
  background-color: #f7faff;
}

.sec-heading {
  text-align: center;
  margin-bottom: 76px;
}

.sec-heading .sec-title {
  color: #2f2f35;
  font-size: 36px;
  line-height: 48px;
  text-transform: capitalize;
  margin-bottom: 0;
}

@media screen and (max-width: 767px) {
  .sec-heading .sec-title {
    font-size: 28px;
    line-height: 36px;
  }
}

.sec-heading .sec-subtitle {
  color: #6c6c6f;
  font-size: 16px;
  line-height: 28px;
  margin-top: 16px;
  margin-bottom: 0;
}

.avatar {
  border-radius: 50%;
}

.roysha-icon {
  display: inherit;
  font-size: 70px;
  margin-bottom: 20px;
}

.roysha-icon span:before {
  color: #256be6  !important;
}

/**
 *  Preloader
 */
#preloader {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #f5f5f5;
  z-index: 99999999;
  width: 100%;
  height: auto;
}

#status {
  width: 250px;
  height: 250px;
  position: absolute;
  left: 50%;
  top: 50%;
  background-image: url(../images/preloader.svg);
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  -ms-transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

/**
 *  Content Box
 */
@media screen and (max-width: 767px) {
  .content-box, .content-box-fluid {
    margin-bottom: 50px;
  }
}

.content-box h2, .content-box-fluid h2 {
  margin-bottom: 20px;
}

@media screen and (max-width: 991px) {
  .content-box h2, .content-box-fluid h2 {
    font-size: 27px;
  }
}

.content-box h4, .content-box-fluid h4 {
  color: #262934;
}

.content-box p, .content-box-fluid p {
  margin-bottom: 28px;
}

.content-box .listBox, .content-box-fluid .listBox, .content-box .listBox-shadow, .content-box-fluid .listBox-shadow {
  margin-bottom: 35px;
  padding-left: 80px;
}

.content-box .listBox img, .content-box-fluid .listBox img, .content-box .listBox-shadow img, .content-box-fluid .listBox-shadow img, .content-box .listBox .roysha-icon, .content-box-fluid .listBox .roysha-icon, .content-box .listBox-shadow .roysha-icon, .content-box-fluid .listBox-shadow .roysha-icon {
  left: 0;
  top: 0;
  -webkit-transform: none;
  -ms-transform: none;
  transform: none;
  max-width: 60px;
}

@media screen and (min-width: 992px) {
  .content-box-fluid {
    max-width: 570px;
  }
}

@media screen and (min-width: 1200px) {
  .content-box-fluid.right {
    float: right;
    padding-left: 30px;
  }
}

.content-box-fluid.left {
  float: left;
}

@media screen and (min-width: 1200px) {
  .content-box-fluid.left {
    padding-right: 25px;
  }
}

.video-box, .video-box-round {
  position: relative;
}

.video-box:after, .video-box-round:after {
  background-color: rgba(18, 61, 136, 0.5);
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  height: 100%;
  width: 100%;
  opacity: .2;
}

.video-box-round {
  border-radius: 5px;
  overflow: hidden;
}

.video-box .video-btn, .video-box-round .video-btn {
  position: absolute;
  left: 0;
  right: 0;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  z-index: 1;
}

@-webkit-keyframes beat {
  0% {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(2);
    transform: scale(2);
  }
}

@keyframes beat {
  0% {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(2);
    transform: scale(2);
  }
}

.video-btn {
  background-color: #fff;
  border-radius: 50%;
  color: #256be6;
  display: block;
  text-align: center;
  line-height: 60px;
  margin: 0 auto;
  position: relative;
  height: 60px;
  width: 60px;
  z-index: 1;
}

.video-btn i {
  position: relative;
  z-index: 1;
}

.video-btn:before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  -webkit-animation: beat infinite 1.2s;
  animation: beat infinite 1.2s;
  height: 100%;
  width: 100%;
  background-color: #256be6;
  border-radius: 50%;
  z-index: -1;
}

.video-btn:after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #fff;
  border-radius: 50%;
  height: 100%;
  width: 100%;
}

.iconBox {
  position: relative;
}

@media screen and (max-width: 767px) {
  .iconBox {
    margin-bottom: 30px;
  }
}

@media screen and (max-width: 575px) {
  .iconBox {
    text-align: center;
  }
}

.iconBox img {
  max-width: 70px;
  margin-bottom: 25px;
}

@media screen and (max-width: 575px) {
  .iconBox img {
    margin: 0 auto 25px;
  }
}

.iconBox .icon {
  color: #256be6;
  font-size: 5em;
  margin-bottom: 20px;
}

.iconBox h5 {
  color: #2f2f35;
  font-size: 22px;
  text-transform: capitalize;
  margin-bottom: 15px;
}

.iconBox h5 a {
  color: #2f2f35;
  display: block;
}

@media screen and (max-width: 991px) {
  .iconBox h5 a {
    font-size: 18px;
  }
}

.iconBox p {
  margin-bottom: 0;
}

@media screen and (max-width: 991px) {
  .iconBox p {
    font-size: 14px;
    line-height: 22px;
  }
}

.iconBox .btn {
  background-color: #2dbe61;
  margin-top: 44px;
}

.iconBox .btn:first-of-type {
  margin-top: 25px;
  margin-right: 0;
}

@media (min-width: 768px) and (max-width: 991px) {
  .iconBox .btn {
    min-width: inherit;
    width: 100%;
  }
}

.boxed {
  padding-top: 0;
  padding-bottom: 0;
}

.boxed-shadow {
  background-color: #fff;
  -webkit-box-shadow: 0px 5px 30px 0px rgba(0, 0, 0, 0.05);
  box-shadow: 0px 5px 30px 0px rgba(0, 0, 0, 0.05);
  padding: 50px 30px;
}

@media screen and (max-width: 991px) {
  .boxed-shadow {
    padding: 35px 15px;
  }
}

.boxed img,
.boxed-shadow img {
  margin: 0 auto 35px;
}

.listBox, .listBox-shadow {
  padding-left: 120px;
  text-align: left;
}

.listBox img, .listBox-shadow img, .listBox .roysha-icon, .listBox-shadow .roysha-icon {
  position: absolute;
  top: 50%;
  left: 25px;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.listBox-shadow {
  background-color: #fff;
  -webkit-box-shadow: 0px 5px 30px 0px rgba(0, 0, 0, 0.05);
  box-shadow: 0px 5px 30px 0px rgba(0, 0, 0, 0.05);
  border-radius: 5px;
  padding: 30px 25px 22px 120px;
}

.list {
  margin-bottom: 30px;
}

.list li {
  color: #2f2f35;
  padding-left: 30px;
  position: relative;
}

.list i {
  color: #2dbe61;
  font-size: 13px;
  margin-right: 10px;
  position: absolute;
  left: 0;
  top: 8px;
}

.round-os {
  border-top-left-radius: 315px;
  border-bottom-left-radius: 315px;
  overflow: hidden;
}

.overlap-imgBox {
  position: relative;
}

.overlap-imgBox .img-1, .overlap-imgBox .img-2 {
  width: 100%;
}

.overlap-imgBox .abs-img {
  position: absolute;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.overlap-imgBox .btn {
  background-color: #fff;
  border-radius: 0;
  border-bottom-left-radius: 10px;
  color: #256be6;
  font-size: 30px;
  min-width: inherit;
  padding: 10px 0;
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100px;
  z-index: 2;
}

.overlap-imgBox .btn:hover {
  background-color: #256be6;
}

.imgBox {
  display: block;
  position: relative;
  width: 100%;
}

@media screen and (max-width: 767px) {
  .imgBox {
    margin-bottom: 50px;
  }
}

.icon-list-block {
  background-color: #fff;
  -webkit-box-shadow: 0px 5px 30px 0px rgba(0, 0, 0, 0.05);
  box-shadow: 0px 5px 30px 0px rgba(0, 0, 0, 0.05);
  border: 1px solid #efefef;
  border-radius: 5px;
  display: block;
  padding: 15px 25px;
  margin-bottom: 30px;
}

@media screen and (max-width: 991px) {
  .icon-list-block {
    text-align: center;
    padding: 15px;
  }
}

.icon-list-block:hover {
  -webkit-transform: translateY(-10px);
  -ms-transform: translateY(-10px);
  transform: translateY(-10px);
  -webkit-box-shadow: 0px 5px 30px 0px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 5px 30px 0px rgba(0, 0, 0, 0.1);
}

.icon-list-block img {
  display: inline-block;
  margin-right: 20px;
  width: 30px;
}

@media screen and (max-width: 1199px) {
  .icon-list-block img {
    margin-right: 15px;
  }
}

@media screen and (max-width: 991px) {
  .icon-list-block img {
    display: block;
    margin: 0 auto;
  }
}

.icon-list-block i {
  display: inline-block;
  margin-right: 20px;
  font-size: 20px;
}

.icon-list-block span {
  color: #2f2f35;
  display: inline-block;
  font-size: 18px;
  font-weight: 500;
  text-transform: capitalize;
  margin-bottom: 0;
}

@media screen and (min-width: 992px) {
  .icon-list-block span {
    line-height: .8;
  }
}

@media screen and (max-width: 991px) {
  .icon-list-block span {
    line-height: 1;
  }
}

@media screen and (max-width: 1199px) {
  .icon-list-block span {
    font-size: 15px;
  }
}

/**
 * Header style
 */
.header, .header02, .header03, .header04 {
  display: block;
  position: absolute;
  left: 0;
  top: 0;
  height: 88px;
  width: 100%;
  z-index: 9;
  -webkit-transition: all .5s;
  -o-transition: all .5s;
  transition: all .5s;
  background-color: #ec5564;
}

.header.fixed-header, .fixed-header.header02, .fixed-header.header03, .fixed-header.header04 {
  position: fixed;
  background: #ec5564;
}

.header .container, .header02 .container, .header03 .container, .header04 .container {
  position: relative;
  height: 100%;
}

.header .logo, .header02 .logo, .header03 .logo, .header04 .logo {
  display: block;
  max-width: 138px;
}

.header .primary-menu, .header02 .primary-menu, .header03 .primary-menu, .header04 .primary-menu {
  margin-left: auto;
}

@media screen and (max-width: 991px) {
  .header .primary-menu ul, .header02 .primary-menu ul, .header03 .primary-menu ul, .header04 .primary-menu ul {
    background-color: #d71e48;
    display: none;
    text-align: left;
    width: 100%;
  }
  .header .primary-menu ul:not(.sub-menu), .header02 .primary-menu ul:not(.sub-menu), .header03 .primary-menu ul:not(.sub-menu), .header04 .primary-menu ul:not(.sub-menu) {
    max-height: 400px;
    overflow-y: scroll;
    padding: 10px 0;
    position: absolute;
    top: 100%;
    left: 0;
  }
}

.header .primary-menu ul li, .header02 .primary-menu ul li, .header03 .primary-menu ul li, .header04 .primary-menu ul li {
  display: inline-block;
  position: relative;
}

@media screen and (max-width: 991px) {
  .header .primary-menu ul li.login, .header02 .primary-menu ul li.login, .header03 .primary-menu ul li.login, .header04 .primary-menu ul li.login {
    border: none;
  }
}

@media screen and (min-width: 992px) {
  .header .primary-menu ul li.login a, .header02 .primary-menu ul li.login a, .header03 .primary-menu ul li.login a, .header04 .primary-menu ul li.login a {
    padding: 5px 30px;
  }
}

.header .primary-menu ul li.has-menu-child i, .header02 .primary-menu ul li.has-menu-child i, .header03 .primary-menu ul li.has-menu-child i, .header04 .primary-menu ul li.has-menu-child i {
  color: #256be6;
  cursor: pointer;
  display: block;
  font-size: 12px;
  line-height: 20px;
  text-align: center;
  position: absolute;
  right: 10px;
  top: 5px;
  width: 20px;
  height: 20px;
}

@media screen and (min-width: 992px) {
  .header .primary-menu ul li.has-menu-child i, .header02 .primary-menu ul li.has-menu-child i, .header03 .primary-menu ul li.has-menu-child i, .header04 .primary-menu ul li.has-menu-child i {
    right: -5px;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
  }
}

.header .primary-menu ul li.has-menu-child ul.sub-menu, .header02 .primary-menu ul li.has-menu-child ul.sub-menu, .header03 .primary-menu ul li.has-menu-child ul.sub-menu, .header04 .primary-menu ul li.has-menu-child ul.sub-menu {
  padding-left: 15px;
  border: 1px solid #ddd;
}

@media screen and (min-width: 992px) {
  .header .primary-menu ul li.has-menu-child ul.sub-menu, .header02 .primary-menu ul li.has-menu-child ul.sub-menu, .header03 .primary-menu ul li.has-menu-child ul.sub-menu, .header04 .primary-menu ul li.has-menu-child ul.sub-menu {
    background-color: #fff;
    text-align: left;
    -webkit-transition: all 300ms ease-in-out;
    -o-transition: all 300ms ease-in-out;
    transition: all 300ms ease-in-out;
    padding: 0;
    position: absolute;
    opacity: 0;
    visibility: hidden;
    top: 100%;
    left: 0;
    width: 220px;
  }
}

.header .primary-menu ul li.has-menu-child ul.sub-menu li, .header02 .primary-menu ul li.has-menu-child ul.sub-menu li, .header03 .primary-menu ul li.has-menu-child ul.sub-menu li, .header04 .primary-menu ul li.has-menu-child ul.sub-menu li {
  display: block;
}

@media screen and (min-width: 992px) {
  .header .primary-menu ul li.has-menu-child ul.sub-menu a, .header02 .primary-menu ul li.has-menu-child ul.sub-menu a, .header03 .primary-menu ul li.has-menu-child ul.sub-menu a, .header04 .primary-menu ul li.has-menu-child ul.sub-menu a {
    color: #666;
    font-size: 14px;
    padding: 8px 5px 10px 25px;
    position: relative;
  }
}

.header .primary-menu ul li.has-menu-child ul.sub-menu a:before, .header02 .primary-menu ul li.has-menu-child ul.sub-menu a:before, .header03 .primary-menu ul li.has-menu-child ul.sub-menu a:before, .header04 .primary-menu ul li.has-menu-child ul.sub-menu a:before {
  content: '';
  width: 7px;
  height: 1px;
  border-radius: 50%;
  background: #f0315c;
  display: block;
  position: absolute;
  left: 10px;
  top: 20px;
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
  -webkit-transition: -webkit-transform 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  transition: -webkit-transform 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  -o-transition: transform 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  transition: transform 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  transition: transform 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275), -webkit-transform 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.header .primary-menu ul li.has-menu-child ul.sub-menu a:hover, .header02 .primary-menu ul li.has-menu-child ul.sub-menu a:hover, .header03 .primary-menu ul li.has-menu-child ul.sub-menu a:hover, .header04 .primary-menu ul li.has-menu-child ul.sub-menu a:hover {
  background-color: #123d88;
  color: #fff;
}

.header .primary-menu ul li.has-menu-child ul.sub-menu a:hover:before, .header02 .primary-menu ul li.has-menu-child ul.sub-menu a:hover:before, .header03 .primary-menu ul li.has-menu-child ul.sub-menu a:hover:before, .header04 .primary-menu ul li.has-menu-child ul.sub-menu a:hover:before {
  background: #fff;
  -webkit-transform: scale(2);
  -ms-transform: scale(2);
  transform: scale(2);
}

.header .primary-menu ul li a, .header02 .primary-menu ul li a, .header03 .primary-menu ul li a, .header04 .primary-menu ul li a {
  color: #fff;
  display: block;
  text-transform: capitalize;
  padding: 5px 25px;
  position: relative;
}

@media screen and (min-width: 992px) {
  .header .primary-menu ul li a, .header02 .primary-menu ul li a, .header03 .primary-menu ul li a, .header04 .primary-menu ul li a {
    padding: 30px 15px;
  }
}

@media screen and (max-width: 1199px) {
  .header .primary-menu ul li a, .header02 .primary-menu ul li a, .header03 .primary-menu ul li a, .header04 .primary-menu ul li a {
    font-size: 14px;
  }
}

@media screen and (max-width: 767px) {
  .header .primary-menu ul li a:hover, .header02 .primary-menu ul li a:hover, .header03 .primary-menu ul li a:hover, .header04 .primary-menu ul li a:hover {
    background-color: #1053c8;
  }
}

.header .primary-menu ul li a.login.btn.btn-outline.btn-round, .header02 .primary-menu ul li a.login.btn.btn-outline.btn-round, .header03 .primary-menu ul li a.login.btn.btn-outline.btn-round, .header04 .primary-menu ul li a.login.btn.btn-outline.btn-round, .header .primary-menu ul li .iconBox a.login.btn.btn-outline, .iconBox .header .primary-menu ul li a.login.btn.btn-outline, .header02 .primary-menu ul li .iconBox a.login.btn.btn-outline, .iconBox .header02 .primary-menu ul li a.login.btn.btn-outline, .header03 .primary-menu ul li .iconBox a.login.btn.btn-outline, .iconBox .header03 .primary-menu ul li a.login.btn.btn-outline, .header04 .primary-menu ul li .iconBox a.login.btn.btn-outline, .iconBox .header04 .primary-menu ul li a.login.btn.btn-outline {
  padding: 11px 25px !important;
}

@media screen and (min-width: 992px) {
  .header .primary-menu ul li a.login.btn.btn-outline.btn-round, .header02 .primary-menu ul li a.login.btn.btn-outline.btn-round, .header03 .primary-menu ul li a.login.btn.btn-outline.btn-round, .header04 .primary-menu ul li a.login.btn.btn-outline.btn-round, .header .primary-menu ul li .iconBox a.login.btn.btn-outline, .iconBox .header .primary-menu ul li a.login.btn.btn-outline, .header02 .primary-menu ul li .iconBox a.login.btn.btn-outline, .iconBox .header02 .primary-menu ul li a.login.btn.btn-outline, .header03 .primary-menu ul li .iconBox a.login.btn.btn-outline, .iconBox .header03 .primary-menu ul li a.login.btn.btn-outline, .header04 .primary-menu ul li .iconBox a.login.btn.btn-outline, .iconBox .header04 .primary-menu ul li a.login.btn.btn-outline {
    min-width: auto;
    top: 13px;
    position: relative;
  }
  .header .primary-menu ul li a.login.btn.btn-outline.btn-round:hover span, .header02 .primary-menu ul li a.login.btn.btn-outline.btn-round:hover span, .header03 .primary-menu ul li a.login.btn.btn-outline.btn-round:hover span, .header04 .primary-menu ul li a.login.btn.btn-outline.btn-round:hover span, .header .primary-menu ul li .iconBox a.login.btn.btn-outline:hover span, .iconBox .header .primary-menu ul li a.login.btn.btn-outline:hover span, .header02 .primary-menu ul li .iconBox a.login.btn.btn-outline:hover span, .iconBox .header02 .primary-menu ul li a.login.btn.btn-outline:hover span, .header03 .primary-menu ul li .iconBox a.login.btn.btn-outline:hover span, .iconBox .header03 .primary-menu ul li a.login.btn.btn-outline:hover span, .header04 .primary-menu ul li .iconBox a.login.btn.btn-outline:hover span, .iconBox .header04 .primary-menu ul li a.login.btn.btn-outline:hover span {
    color: #123d88;
  }
}

@media screen and (max-width: 991px) {
  .header .primary-menu ul li a.login.btn.btn-outline.btn-round, .header02 .primary-menu ul li a.login.btn.btn-outline.btn-round, .header03 .primary-menu ul li a.login.btn.btn-outline.btn-round, .header04 .primary-menu ul li a.login.btn.btn-outline.btn-round, .header .primary-menu ul li .iconBox a.login.btn.btn-outline, .iconBox .header .primary-menu ul li a.login.btn.btn-outline, .header02 .primary-menu ul li .iconBox a.login.btn.btn-outline, .iconBox .header02 .primary-menu ul li a.login.btn.btn-outline, .header03 .primary-menu ul li .iconBox a.login.btn.btn-outline, .iconBox .header03 .primary-menu ul li a.login.btn.btn-outline, .header04 .primary-menu ul li .iconBox a.login.btn.btn-outline, .iconBox .header04 .primary-menu ul li a.login.btn.btn-outline {
    border: none;
    text-align-last: left;
    font-weight: 400;
  }
  .header .primary-menu ul li a.login.btn.btn-outline.btn-round .bh, .header02 .primary-menu ul li a.login.btn.btn-outline.btn-round .bh, .header03 .primary-menu ul li a.login.btn.btn-outline.btn-round .bh, .header04 .primary-menu ul li a.login.btn.btn-outline.btn-round .bh, .header .primary-menu ul li .iconBox a.login.btn.btn-outline .bh, .iconBox .header .primary-menu ul li a.login.btn.btn-outline .bh, .header02 .primary-menu ul li .iconBox a.login.btn.btn-outline .bh, .iconBox .header02 .primary-menu ul li a.login.btn.btn-outline .bh, .header03 .primary-menu ul li .iconBox a.login.btn.btn-outline .bh, .iconBox .header03 .primary-menu ul li a.login.btn.btn-outline .bh, .header04 .primary-menu ul li .iconBox a.login.btn.btn-outline .bh, .iconBox .header04 .primary-menu ul li a.login.btn.btn-outline .bh {
    display: none;
  }
}

.header .primary-menu ul li:hover ul.sub-menu, .header02 .primary-menu ul li:hover ul.sub-menu, .header03 .primary-menu ul li:hover ul.sub-menu, .header04 .primary-menu ul li:hover ul.sub-menu {
  opacity: 1;
  visibility: visible;
}

@media screen and (max-width: 991px) {
  .header .primary-menu ul li, .header02 .primary-menu ul li, .header03 .primary-menu ul li, .header04 .primary-menu ul li {
    display: block;
  }
}

.header .primary-menu #mobile-menu-toggler, .header02 .primary-menu #mobile-menu-toggler, .header03 .primary-menu #mobile-menu-toggler, .header04 .primary-menu #mobile-menu-toggler {
  color: #fff;
  cursor: pointer;
  font-size: 20px;
  line-height: .8;
  position: absolute;
  right: 15px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

@media screen and (min-width: 992px) {
  .header .primary-menu #mobile-menu-toggler, .header02 .primary-menu #mobile-menu-toggler, .header03 .primary-menu #mobile-menu-toggler, .header04 .primary-menu #mobile-menu-toggler {
    display: none;
  }
}

.header02, .header03 {
  background-color: #fff;
  position: relative;
  height: auto;
}

.header02 .logo img, .header03 .logo img {
  -webkit-filter: brightness(0) invert(0);
  filter: brightness(0) invert(0);
}

.header02 .primary-menu, .header03 .primary-menu {
  margin-left: 0;
}

.header02 .primary-menu #mobile-menu-toggler, .header03 .primary-menu #mobile-menu-toggler {
  color: #000;
}

.header02 .primary-menu ul li:last-child, .header03 .primary-menu ul li:last-child {
  margin-left: auto;
}

@media screen and (min-width: 992px) {
  .header02 .primary-menu ul li a, .header03 .primary-menu ul li a {
    color: #000;
  }
}

@media screen and (min-width: 992px) {
  .header02 .primary-menu .btn, .header03 .primary-menu .btn {
    background-color: #004bc8;
  }
}

.header03 .social-icons {
  display: inline-block;
}

.header03 .social-icons a:not(:last-child) {
  border-right: 1px solid #fff;
}

.header03 .login {
  padding: 5px 20px;
  border-radius: 0;
  text-transform: capitalize;
}

.header03 .login:hover {
  color: #fff;
}

@media screen and (max-width: 767px) {
  .header03 .login {
    padding: 5px 13px;
  }
}

.header04 .login {
  min-width: auto;
  padding: 7px 25px;
  border-radius: 5px;
  text-transform: capitalize;
  letter-spacing: 1.8px;
}

.header04 .login:hover {
  color: #2f2f35;
  background-color: #fff;
}

@media screen and (max-width: 991px) {
  .header04 .login {
    margin-right: 35px;
  }
}

@media screen and (max-width: 991px) {
  .header-main {
    height: 80px;
  }
}

.header-top {
  padding: 10px 0;
  background: #002563;
}

.header-top .top-text {
  display: inline-block;
  color: #fff;
  font-size: 12px;
}

.header-top .top-text:nth-child(2) {
  margin-left: 20px;
}

.header-top .top-text i {
  margin-right: 5px;
}

.header-top .social-icons a {
  display: inline-block;
  color: #fff;
  font-size: 13px;
  line-height: 1;
  padding: 0 7px;
}

@media screen and (max-width: 575px) {
  .header-top {
    display: none;
  }
}

.primary-menu .btn span {
  color: #fff;
}

.primary-menu .btn:first-of-type {
  margin-right: 0;
}

/**
 * Banner style
 */
.banner {
  background-image: url("{{ asset('app/images/bghome.jpg') }}");
  background-size: cover;
  background-position: center top;
  background-repeat: no-repeat;
}

@media screen and (min-width: 992px) {
  .banner {
    padding: 10% 0 5%;
  }
}

@media screen and (max-width: 991px) {
  .banner {
    padding: 15% 0 7%;
  }
}

@media screen and (max-width: 767px) {
  .banner {
    padding: 20% 0 10%;
  }
}

@media screen and (max-width: 479px) {
  .banner {
    padding: 150px 0 50px;
  }
}

.banner .ban-content h1 {
  color: #fff;
  font-size: 46px;
  line-height: 60px;
  text-transform: capitalize;
  margin-bottom: 0;
}

@media screen and (max-width: 1199px) {
  .banner .ban-content h1 {
    font-size: 38px;
    line-height: 50px;
  }
}

@media screen and (max-width: 767px) {
  .banner .ban-content h1 {
    font-size: 34px;
    line-height: 48px;
  }
}

@media screen and (max-width: 575px) {
  .banner .ban-content h1 {
    font-size: 30px;
    line-height: 40px;
  }
}

@media screen and (max-width: 479px) {
  .banner .ban-content h1 {
    font-size: 22px;
    line-height: 30px;
  }
}

.banner .ban-content p {
  color: #fff;
}

@media screen and (min-width: 992px) {
  .banner .ban-content p {
    line-height: 30px;
  }
}

@media screen and (min-width: 576px) {
  .banner .ban-content p {
    margin-bottom: 5%;
  }
}

@media screen and (max-width: 575px) {
  .banner .ban-content p {
    font-size: 14px;
    margin-bottom: 40px;
  }
}

@media screen and (max-width: 479px) {
  .banner .ban-content p {
    font-size: 13px;
  }
}

@media screen and (max-width: 575px) {
  .banner .btn {
    font-size: 13px;
  }
}

@media screen and (max-width: 479px) {
  .banner .btn {
    margin-bottom: 15px;
  }
}

@media screen and (max-width: 1199px) {
  .banner br {
    display: none;
  }
}

.banner:before {
  content: '';
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  background: #dc354596;
  
}

.banner.v2 {
  background-image: url("../images/banner/4.jpg");
}

.banner.v2:after {
  background-color: #fff;
  -webkit-clip-path: polygon(100% 65%, 100% 100%, 0 100%);
  clip-path: polygon(100% 65%, 100% 100%, 0 100%);
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  height: 100%;
  width: 100%;
}

.banner.v2 .tagline {
  color: #fff;
  font-weight: 400;
}

.banner.v2.bSupport:after {
  background-color: transparent !important;
}

.banner.v3 {
  background-image: url("../images/banner/5.jpg");
}

.banner.v5 {
  background-image: url("../images/banner/8.jpg");
}

.banner.v6 {
  background-image: url("../images/banner/10.jpg");
}

.banner.v7 {
  background-image: url("../images/banner/10.jpg");
}

.banner.v7:before {
  opacity: .7;
}

@media screen and (max-width: 991px) {
  .banner.v7:before .ban-content {
    margin-bottom: 40px;
  }
}

.banner .card-scrn-img {
  max-width: 1825px;
  margin: 0 auto;
  width: 100%;
}

.banner .simple-txt {
  color: #fff;
  display: block;
  margin-top: 20px;
}

.home-two .banner::before {
  content: '';
  position: absolute;
  top: auto;
  left: 0;
  right: 0;
  bottom: 0px;
}

@media screen and (max-width: 991px) {
  .overview .content-box, .overview .content-box-fluid {
    margin-bottom: 50px;
  }
}

.overview .iconBox {
  margin-bottom: 30px;
}

/**
 * Send money 
 */
.home-send-money {
  background-color: #f7faff;
}

.home-send-money .mbl-screen:before {
  background-size: auto;
  background-position: left top;
  background-repeat: no-repeat;
  content: '';
  position: absolute;
  top: 50%;
  left: auto;
  right: 100%;
  bottom: 0;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  height: 379px;
  width: 147px;
  z-index: 1;
}

.mbl-screen {
  position: relative;
  overflow: hidden;
}

.mbl-screen .mbl-scrn1 {
  max-width: 313px;
}

@media screen and (min-width: 320px) {
  .mbl-screen .mbl-scrn1 {
    margin-left: -70px;
  }
}

.mbl-screen .mbl-scrn2 {
  position: absolute;
  right: 0;
  top: 55px;
  max-width: 309px;
  z-index: 1;
}

@media screen and (max-width: 991px) {
  .mbl-screen {
    margin-bottom: 50px;
  }
}

/**
 * Receive money 
 */
.home-recv-money {
  overflow: hidden;
}

.home-recv-money .recv-img {
  position: relative;
}

@media screen and (min-width: 992px) {
  .home-recv-money .recv-img {
    padding-left: 10%;
  }
}

/**
 * Payment section
 */
.payment .pay-img {
  max-width: 593px;
  position: relative;
}

@media screen and (min-width: 1400px) {
  .payment .pay-img {
    margin-left: -120px;
  }
}

@media screen and (max-width: 991px) {
  .payment .pay-img {
    margin-bottom: 50px;
  }
}

/**
 * Features section
 */
.features {
  background-image: url("../images/banner/2.jpg");
  background-size: cover;
  background-position: center top;
  background-repeat: no-repeat;
  padding-bottom: 0;
  overflow: hidden;
}

.features:before {
  content: '';
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  background: #004bc8;
  opacity: .7;
}

.features .sec-heading {
  max-width: 770px;
  margin: 0 auto;
}

.features .sec-heading .sec-title,
.features .sec-heading .sec-subtitle {
  color: #fff;
}

.features .features-scrns {
  position: relative;
  max-width: 1570px;
  margin: 0 auto;
}

.features .features-scrns .scrn-1 {
  max-width: 892px;
  margin: 0 auto;
  position: relative;
  z-index: 1;
}

.features .features-scrns .scrn-2,
.features .features-scrns .scrn-3 {
  max-width: 838px;
  position: absolute;
  bottom: 0;
  left: 0;
  z-index: 0;
  bottom: -40px;
}

.features .features-scrns .scrn-3 {
  left: auto;
  right: 0;
}

.features-v2 {
  background-image: url("../images/banner/7.jpg");
  background-size: cover;
  background-position: center top;
  background-repeat: no-repeat;
}

.features-v2 .content-box-fluid h2, .features-v2 .content-box-fluid p, .features-v2 .content-box-fluid span {
  color: #fff;
}

.features-v2 .content-box-fluid .tagline.bar:after {
  background-color: #fff;
}

.features-v2 .content-box-fluid a:hover span {
  color: #000;
}

/**
 * Testimonial section
 */
.testimonial .single-testimonial {
  position: relative;
  margin-bottom: 65px;
}

.testimonial .tst-body {
  background-color: #fff;
  border-radius: 10px;
  -webkit-box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.1);
  padding: 26px 20px;
  position: relative;
  margin-bottom: 27px;
}

.testimonial .tst-body:after {
  content: '';
  position: absolute;
  top: 100%;
  left: 24px;
  right: auto;
  bottom: auto;
  background-color: #fff;
  -webkit-clip-path: polygon(0 0, 50% 100%, 100% 0);
  clip-path: polygon(0 0, 50% 100%, 100% 0);
  width: 20px;
  height: 13px;
}

.testimonial .tst-head {
  position: relative;
  padding: 10px 0 10px 85px;
  min-height: 70px;
}

.testimonial .tst-head .avatar {
  border-radius: 50%;
  max-width: 70px;
  position: absolute;
  left: 0;
  top: 0;
}

.testimonial .tst-head h6 {
  color: #2f2f35;
  font-size: 16px;
  font-weight: 500;
  text-transform: capitalize;
  margin-bottom: 0;
}

.testimonial .tst-head span {
  color: #6c6c6f;
  font-size: 16px;
}

.testimonial .owl-dots {
  text-align: center;
}

.testimonial .owl-dots span {
  background-color: #c0c0c2;
  display: inline-block;
  margin: 0 7px;
  height: 4px;
  width: 40px;
}

.testimonial .owl-dots .active span {
  background-color: #256be6;
}

.testimonial-v2 .testimonialBox, .testimonial-v3 .testimonialBox {
  position: relative;
  background-color: #fff;
  border-radius: 5px;
  -webkit-box-shadow: 0px 5px 30px 0px rgba(0, 0, 0, 0.05);
  box-shadow: 0px 5px 30px 0px rgba(0, 0, 0, 0.05);
  padding: 30px;
  text-align: center;
}

.testimonial-v2 .testimonialBox .quote-sign, .testimonial-v3 .testimonialBox .quote-sign {
  color: #f8f8f8;
  font-size: 62px;
  position: absolute;
  top: 30px;
  left: 30px;
  z-index: 1;
}

.testimonial-v2 .single-testimonial, .testimonial-v3 .single-testimonial {
  position: relative;
  max-width: 770px;
  margin: 30px auto;
}

.testimonial-v2 .single-testimonial p, .testimonial-v3 .single-testimonial p {
  font-style: italic;
  margin: 0;
}

.testimonial-v2 .client-thumb a, .testimonial-v3 .client-thumb a {
  border-radius: 50%;
  display: inline-block;
  margin: 0 10px;
  width: 42px;
  overflow: hidden;
}

.testimonial-v2 .client-thumb a.active, .testimonial-v3 .client-thumb a.active {
  -webkit-transform: scale(1.3);
  -ms-transform: scale(1.3);
  transform: scale(1.3);
}

.testimonial-v2 .owl-nav, .testimonial-v3 .owl-nav {
  position: absolute;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  width: 100%;
}

@media screen and (max-width: 991px) {
  .testimonial-v2 .owl-nav, .testimonial-v3 .owl-nav {
    display: none;
  }
}

.testimonial-v2 .owl-nav button, .testimonial-v3 .owl-nav button {
  background-color: #cacaca !important;
  border-radius: 50%;
  color: #fff !important;
  -webkit-transition: all 300ms ease-in-out;
  -o-transition: all 300ms ease-in-out;
  transition: all 300ms ease-in-out;
  height: 40px;
  width: 40px;
}

.testimonial-v2 .owl-nav button:hover, .testimonial-v3 .owl-nav button:hover {
  background-color: #256be6 !important;
}

.testimonial-v2 .owl-nav .owl-prev, .testimonial-v3 .owl-nav .owl-prev {
  position: absolute;
  left: -130px;
}

.testimonial-v2 .owl-nav .owl-next, .testimonial-v3 .owl-nav .owl-next {
  position: absolute;
  right: -130px;
}

.testimonial-v3 .testimonialBox {
  -webkit-box-shadow: none;
  box-shadow: none;
}

.testimonial-v3 .testimonialBox .tst-head .avatar {
  display: block;
  margin: 0 auto 15px;
  width: 60px;
}

.testimonial-v3 .testimonialBox .tst-head h6 {
  color: #2f2f35;
  font-size: 20px;
  margin-bottom: 27px;
}

.testimonial-v3 .owl-dots button {
  border: 1px solid #737376;
  border-radius: 50px;
  margin: 0 4px;
  height: 10px;
  width: 10px;
}

.testimonial-v3 .owl-dots button.active {
  background-color: #256be6;
  border-color: #256be6;
}

/**
 * Footer
 */
.footer {
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  background-image: url("");
  background-color: #212529;
  position: relative;
}

.footer .foo-top {
  padding: 100px 0 90px;
}

.footer .widget h5 {
  color: #fff;
  font-size: 20px;
  position: relative;
  padding-bottom: 15px;
  margin-bottom: 25px;
}

.footer .widget h5:before {
  content: '';
  position: absolute;
  top: auto;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #fff;
  height: 2px;
  width: 30px;
}

@media screen and (max-width: 575px) {
  .footer .widget h5 i {
    font-size: 14px;
    position: absolute;
    top: 0;
    right: 0;
    width: 20px;
    text-align: center;
  }
}

@media screen and (max-width: 575px) {
  .footer .widget {
    margin-top: 30px;
  }
}

@media screen and (max-width: 991px) {
  .footer .foo-nav {
    margin-bottom: 30px;
  }
}

@media screen and (max-width: 575px) {
  .footer .foo-nav {
    margin-bottom: 0;
  }
  .footer .foo-nav ul {
    display: none;
  }
  .footer .foo-nav h5 {
    cursor: pointer;
    margin-bottom: 0;
  }
}

.footer .foo-nav li a {
  color: #fff;
  display: block;
  font-size: 15px;
  padding: 5px 0;
  padding-left: 10px;
  position: relative;
}

.footer .foo-nav li a:before {
  content: '\f0da';
  font-family: "Font Awesome 5 Free";
  font-weight: 900;
  position: absolute;
  left: 0;
  top: 5px;
  opacity: 1;
  visibility: visible;
  -webkit-transition: all 300ms ease-in-out;
  -o-transition: all 300ms ease-in-out;
  transition: all 300ms ease-in-out;
}

.footer .foo-nav li a:hover {
  padding-left: 15px;
}

.footer .foo-address address {
  color: #fff;
  margin-bottom: 35px;
}

.footer .foo-address address a {
  color: #fff;
}

.footer .foo-btm {
  background-color: rgba(0, 0, 0, 0.1);
  padding: 25px;
}

.footer .foo-navigation ul li {
  display: inline-block;
}

.footer .foo-navigation ul li a {
  color: #fff;
  display: block;
  font-size: 15px;
  padding-right: 20px;
}

@media screen and (max-width: 991px) {
  .footer .foo-navigation ul li a {
    font-size: 12px;
    padding-right: 12px;
  }
}

.footer .foo-navigation ul li:last-child a {
  padding-right: 0;
}

@media screen and (max-width: 767px) {
  .footer .foo-navigation {
    text-align: center;
  }
}

.footer .copyright {
  color: #fff;
  font-size: 15px;
  text-align: center;
}

.footer .copyright a {
  color: #fff;
  display: inline-block;
  font-weight: 500;
}

@media screen and (min-width: 768px) {
  .footer .copyright {
    text-align: right;
  }
}

@media screen and (max-width: 991px) {
  .footer .copyright {
    font-size: 12px;
  }
}

/**
 * Currency form
 */
.nice-select {
  float: none;
  border: 0;
}

.form-field {
  position: relative;
  margin-bottom: 20px;
}

.form-field label {
  color: #6c6c6f;
  display: block;
  font-size: 16px;
  font-weight: 500;
  text-transform: capitalize;
  margin-bottom: 7px;
}

.form-field input {
  border: none;
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
  padding: 10px 15px;
  width: 100%;
}

.form-field select, .form-field .nice-select {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  border: 1px solid #dadada;
  border-radius: 5px;
  display: block;
  width: 100%;
}

.form-field .nice-select {
  width: 100%;
  height: 50px;
  line-height: 50px;
}

.form-field .nice-select .list {
  width: 100%;
}

.form-field .curr-select {
  border: 1px solid #dadada;
  border-radius: 5px;
  -ms-flex-preferred-size: 30%;
  flex-basis: 30%;
  position: relative;
  padding: 10px 15px;
}

.form-field .curr-select img {
  display: inline-block;
  max-width: 25px;
  height: 25px;
  margin-right: 10px;
  vertical-align: top;
}

.form-field .curr-select span, .form-field .curr-select a {
  color: #2f2f35;
  display: block;
  font-size: 16px;
  text-transform: uppercase;
  position: relative;
}

.form-field .curr-select ul {
  background-color: #fff;
  -webkit-box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.1);
  display: none;
  padding: 10px 20px;
  position: absolute;
  left: 0;
  top: 100%;
  width: 100%;
  z-index: 1;
}

.form-field .curr-select ul li:first-child {
  margin-bottom: 10px;
}

.form-field .join-field {
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  border: 1px solid #dadada;
  border-radius: 5px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
}

.form-field .join-field .nice-select {
  width: auto;
  border: none;
  border-left: 1px solid #dadada;
  border-radius: 0;
}

@media screen and (max-width: 575px) {
  .form-field .join-field .nice-select {
    width: 100%;
    border-left: 0;
    border-top: 1px solid #dadada;
  }
}

.form-field .join-field input, .form-field .join-field select {
  -ms-flex-preferred-size: 70%;
  flex-basis: 70%;
  max-width: 70%;
}

@media (min-width: 992px) and (max-width: 1199px) {
  .form-field .join-field input, .form-field .join-field select {
    -ms-flex-preferred-size: 60%;
    flex-basis: 60%;
    max-width: 60%;
  }
}

@media screen and (max-width: 479px) {
  .form-field .join-field input, .form-field .join-field select {
    -ms-flex-preferred-size: 50%;
    flex-basis: 50%;
    max-width: 50%;
  }
}

.form-field .join-field .curr-select {
  -ms-flex-preferred-size: 30%;
  flex-basis: 30%;
  max-width: 30%;
}

@media (min-width: 992px) and (max-width: 1199px) {
  .form-field .join-field .curr-select {
    -ms-flex-preferred-size: 40%;
    flex-basis: 40%;
    max-width: 40%;
  }
}

@media screen and (max-width: 479px) {
  .form-field .join-field .curr-select {
    -ms-flex-preferred-size: 50%;
    flex-basis: 50%;
    max-width: 50%;
  }
}

.form-field .join-field select {
  border: none;
  border-left: 1px solid #dadada;
  border-radius: 0;
}

.currency-form {
  background-color: #fff;
  border-radius: 10px;
  -webkit-box-shadow: 0 0 40px 10px rgba(0, 0, 0, 0.1);
  box-shadow: 0 0 40px 10px rgba(0, 0, 0, 0.1);
  cursor: pointer;
  padding: 40px 22px;
  position: relative;
  z-index: 1;
}

.currency-form h4 {
  color: #2f2f35;
  font-size: 30px;
  line-height: 30px;
  margin-bottom: 34px;
}

.currency-form .form-btn {
  text-align: left;
  line-height: 1;
  margin-bottom: 30px;
  padding: 20px 40px;
}

.currency-form .form-btn i {
  float: right;
}

.currency-form .accept-terms {
  color: #6c6c6f;
  display: block;
  font-size: 14px;
  line-height: .8;
  text-align: center;
}

@media screen and (max-width: 1199px) {
  .currency-form .accept-terms a {
    display: block;
    margin-top: 10px;
  }
}

.currency-form .form-field .curr-select {
  border: none;
  border-left: 1px solid #dadada;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
  border-radius: 0;
  padding: 0;
  padding-left: 20px;
}

.currency-form-v2 {
  background-color: #fff;
  border-radius: 10px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  padding: 20px 22px 0;
  position: relative;
}

.currency-form-v2 h4 {
  -ms-flex-preferred-size: 100%;
  flex-basis: 100%;
}

@media screen and (max-width: 767px) {
  .currency-form-v2 .form-field {
    -ms-flex-preferred-size: 100% !important;
    flex-basis: 100% !important;
  }
}

.currency-form-v2 .form-field:first-of-type {
  -ms-flex-preferred-size: 130px;
  flex-basis: 130px;
}

.currency-form-v2 .form-field:nth-of-type(2) {
  -ms-flex-preferred-size: calc( 100% - 145px);
  flex-basis: calc( 100% - 145px);
}

.currency-form-v2 .form-field .join-field input, .currency-form-v2 .form-field .join-field select, .currency-form-v2 .form-field .join-field .btn {
  -ms-flex-preferred-size: 33.333%;
  flex-basis: 33.333%;
  max-width: 33.333%;
}

@media screen and (max-width: 575px) {
  .currency-form-v2 .form-field .join-field input, .currency-form-v2 .form-field .join-field select, .currency-form-v2 .form-field .join-field .btn {
    -ms-flex-preferred-size: 100%;
    flex-basis: 100%;
    max-width: 100%;
  }
  .currency-form-v2 .form-field .join-field select {
    border-left: 0;
    border-top: 1px solid #dadada;
  }
}

.currency-form-v2 .form-field .btn {
  background-color: #f13963;
  margin: 0;
  min-width: auto;
  padding: 15px 15px;
}

.bill-form {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
}

.bill-form .form-field:first-of-type {
  -ms-flex-preferred-size: 200px;
  flex-basis: 200px;
}

.bill-form .form-field:nth-of-type(2) {
  -ms-flex-preferred-size: calc(100% - 208px);
  flex-basis: calc(100% - 208px);
}

@media screen and (max-width: 575px) {
  .bill-form .form-field:first-of-type {
    -ms-flex-preferred-size: 100%;
    flex-basis: 100%;
  }
  .bill-form .form-field:nth-of-type(2) {
    -ms-flex-preferred-size: 100%;
    flex-basis: 100%;
  }
}

.bill-form .form-field select, .bill-form .form-field .nice-select {
  border-radius: 0;
  border-top-left-radius: 50px;
  border-bottom-left-radius: 50px;
  color: #2f2f35;
  font-size: 16px;
  font-weight: 500;
  line-height: 40px;
  height: 60px;
  padding: 9px 25px;
}

@media screen and (max-width: 575px) {
  .bill-form .form-field select, .bill-form .form-field .nice-select {
    border-radius: 50px;
  }
}

.bill-form .form-field input {
  border-radius: 0;
  height: 60px;
}

.bill-form .form-field .join-field {
  border: none;
  display: block;
}

.bill-form .form-field .join-field input {
  border-top-right-radius: 50px;
  border-bottom-right-radius: 50px;
  -ms-flex-preferred-size: 100%;
  flex-basis: 100%;
  max-width: 100%;
  padding-right: 90px;
  padding-left: 25px;
}

@media screen and (max-width: 575px) {
  .bill-form .form-field .join-field input {
    border-radius: 50px;
  }
}

.bill-form .form-field .join-field .btn {
  background-color: #2dbe61;
  border-radius: 0;
  border-top-right-radius: 50px;
  border-bottom-right-radius: 50px;
  min-width: auto;
  margin: 0;
  position: absolute;
  right: 0;
  top: 0;
  height: 60px;
  width: 75px;
}

@media screen and (max-width: 575px) {
  .bill-form .form-field .join-field .btn {
    border-radius: 50px;
  }
}

.bill-form.v2 .form-field select, .bill-form.v2 .form-field .nice-select {
  border-radius: 50px;
  padding-left: 25px;
  line-height: 44px;
}

.bill-form.v2 .form-field input {
  border-radius: 50px;
  padding-left: 25px;
  padding-right: 210px;
}

@media screen and (max-width: 767px) {
  .bill-form.v2 .form-field input {
    padding-right: 110px;
  }
}

.bill-form.v2 .form-field .btn {
  border-radius: 50px;
  width: 200px;
}

@media screen and (max-width: 767px) {
  .bill-form.v2 .form-field .btn {
    width: 105px;
  }
}

.receive-form {
  background-color: #fff;
  border-radius: 5px;
  position: relative;
}

.receive-form .form-field label {
  background-color: #f1f1f1;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
  color: #2f2f35;
  display: block;
  font-size: 16px;
  font-weight: 500;
  text-transform: capitalize;
  padding: 13px 25px;
  margin: 0;
}

.receive-form .form-field .join-field {
  border: none;
}

.receive-form .form-field .join-field .curr-select {
  border: none;
  -ms-flex-preferred-size: 68.49%;
  flex-basis: 68.49%;
  max-width: 68.49%;
}

@media screen and (max-width: 375px) {
  .receive-form .form-field .join-field .curr-select {
    -ms-flex-preferred-size: 100%;
    flex-basis: 100%;
    max-width: 100%;
  }
}

.receive-form .form-field .join-field .curr-select span {
  text-transform: capitalize;
}

@media screen and (max-width: 375px) {
  .receive-form .form-field .join-field .curr-select span i {
    position: absolute;
    right: 0;
    top: 5px;
  }
}

.receive-form .form-field .join-field .btn {
  background-color: #2dbe61;
  border-radius: 0;
  border-bottom-right-radius: 5px;
  -ms-flex-preferred-size: 31.50%;
  flex-basis: 31.50%;
  min-width: auto;
  margin: 0;
}

@media screen and (max-width: 375px) {
  .receive-form .form-field .join-field .btn {
    border-bottom-left-radius: 5px;
    -ms-flex-preferred-size: 100%;
    flex-basis: 100%;
    max-width: 100%;
  }
}

.form-tab {
  background-color: #fff;
  border-radius: 10px;
  overflow: hidden;
}

.form-tab .nav-tabs {
  border-bottom: none;
}

.form-tab .nav-tabs li {
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  text-align: center;
}

.form-tab .nav-tabs a {
  border: 1px solid #dadada;
  background-color: #f0f0f0;
  color: #2f2f35;
  display: block;
  font-size: 18px;
  font-weight: 500;
  padding: 20px 10px;
  text-transform: capitalize;
}

.form-tab .nav-tabs a.active {
  background-color: #fff;
  border-color: transparent;
}

.form-tab .currency-form {
  padding-top: 25px;
  -webkit-box-shadow: none;
  box-shadow: none;
}

.form-tab .form-field {
  border: 1px solid #dadada;
  border-radius: 5px;
}

.form-tab .form-field label {
  background-color: #f0f0f0;
  border-bottom: 1px solid #dadada;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
  color: #2f2f35;
  margin-bottom: 0;
  padding: 7px 15px;
}

.form-tab .form-field .join-field {
  border: none;
}

.form-tab .form-field select, .form-tab .form-field .nice-select {
  border: none;
}

.currency-text {
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  position: relative;
  padding-left: 50px;
  min-height: 51px;
  margin-bottom: 20px;
}

.currency-text::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-image: url(../images/ellips.png);
  background-repeat: no-repeat;
}

.currency-text strong {
  font-weight: 500;
}

.currency-text span {
  font-size: 14px;
}

.currency-text span:last-child {
  margin-left: 20px;
}

/**
 * Services section
 */
@media screen and (min-width: 1441px) {
  .services .container-fluid {
    max-width: 1400px;
  }
}

/**
 * Access Money section
 */
.access-money .overlap-imgBox .img-1 {
  border-radius: 10px;
  -webkit-box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  position: relative;
  z-index: 1;
}

@media screen and (max-width: 767px) {
  .access-money .overlap-imgBox .img-1 {
    max-width: calc(100% - 30px);
  }
}

.access-money .overlap-imgBox .img-2 {
  right: -85px;
  z-index: 0;
}

@media screen and (max-width: 1199px) {
  .access-money .overlap-imgBox .img-2 {
    right: -65px;
  }
}

@media screen and (max-width: 991px) {
  .access-money .overlap-imgBox .img-2 {
    right: -30px;
  }
}

@media screen and (max-width: 575px) {
  .access-money .overlap-imgBox .img-2 {
    right: 0;
  }
}

@media (min-width: 992px) and (max-width: 1440px) {
  .access-money .offset-lg-1 {
    margin-left: 3%;
  }
}

/**
 *  Question section
 */
.question .sec-heading {
  margin-bottom: 40px;
}

/**
 * Online payment section
 */
.online-payment {
  overflow: hidden;
}

.online-payment .imgBox {
  padding-left: 65px;
}

.online-payment .imgBox::before {
  background-size: auto;
  background-position: left top;
  background-repeat: no-repeat;
  content: '';
  position: absolute;
  top: 50%;
  left: 45px;
  right: 0;
  bottom: 0;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  height: 360px;
  width: 109px;
  z-index: 1;
}

@media screen and (max-width: 1919px) {
  .online-payment .imgBox::before {
    background-size: 100%;
    background-position: center left;
    background-repeat: no-repeat;
    height: 95%;
    z-index: -1;
  }
}

@media screen and (max-width: 767px) {
  .online-payment .imgBox {
    margin-bottom: 50px;
  }
}

@media screen and (max-width: 575px) {
  .online-payment .imgBox {
    padding-left: 0;
  }
  .online-payment .imgBox:before {
    display: none;
  }
}

/**
 * Video section
 */
.video {
  background-image: url("../images/banner/6.jpg");
  background-size: cover;
  background-position: center top;
  background-repeat: no-repeat;
  background-attachment: fixed;
}

.video .tagline {
  color: #fff;
}

.video .sec-title, .video .sec-subtitle {
  color: #fff;
}

.video .video-btn {
  margin-bottom: 100px;
}

.video .btn {
  text-align: center;
  margin: 0 auto;
}

.video.v2 {
  background-image: url("../images/banner/9.jpg");
}

.video.v3 {
  background-image: url("../images/banner/11.jpg");
}

@media screen and (max-width: 767px) {
  .video-post .video-box-round {
    margin-bottom: 30px;
  }
}

/**
 * Partners section
 */
.partners .partners-logo {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
}

/**
 * App section
 */
.app {
  overflow: hidden;
}

.app .btn {
  padding-top: 17px;
  padding-bottom: 17px;
}

@media screen and (max-width: 479px) {
  .app .btn {
    width: 100%;
  }
  .app .btn:first-of-type {
    margin-bottom: 20px;
  }
}

.app .icon-left i {
  font-size: 20px;
  margin-right: 10px;
}

/**
 * Instant Cashout
 */
.instant-cashout,
.online-transfer,
.mobile-wallet {
  overflow: hidden;
}

/**
 * Bill Categories
 */
.bill-categories {
  padding-bottom: 70px;
}

/**
 * Our process section
 */
.our-process .btn {
  background: #256be6;
  color: #fff;
  margin-top: 65px;
  border: 1px solid #256be6;
}

.our-process .btn:hover {
  color: #000;
}

@media screen and (max-width: 1199px) {
  .our-process .boxed-shadow {
    padding-left: 15px;
    padding-right: 15px;
  }
  .our-process .boxed-shadow p {
    font-size: 15px;
  }
}

@media screen and (max-width: 991px) {
  .our-process .boxed-shadow {
    margin-bottom: 30px;
  }
}

/**
 * Accordion section
 */
.accordion {
  counter-reset: accordion-counter;
  position: relative;
}

@media screen and (max-width: 767px) {
  .accordion {
    margin-bottom: 50px;
  }
}

.accordion .accordion-item {
  background-color: #fff;
  border: 1px solid #f1f1f1;
  border-radius: 5px;
  margin-bottom: 20px;
  padding: 20px;
  position: relative;
}

.accordion .accordion-item h5 {
  color: #2f2f35;
  cursor: pointer;
  font-size: 18px;
  margin-bottom: 0;
}

.accordion .accordion-item .acr-body {
  margin-top: 12px;
}

.accordion .accordion-item .acr-body p {
  margin-bottom: 0;
}

.accordion.has-numbering .accordion-item {
  padding-left: 80px;
}

.accordion.has-numbering .accordion-item:before {
  background: #fff;
  border-radius: 50%;
  border: 1px solid #e0e0e0;
  counter-increment: accordion-counter;
  content: counter(accordion-counter);
  color: #111;
  display: block;
  line-height: 35px;
  text-align: center;
  position: absolute;
  left: 20px;
  top: 15px;
  height: 35px;
  width: 35px;
  z-index: 1;
}

.accordion.has-numbering .accordion-item:after {
  background-color: #f6f6f6;
  border: 1px solid #e0e0e0;
  border-radius: 50%;
  content: '';
  display: block;
  position: absolute;
  left: 15px;
  top: 10px;
  height: 45px;
  width: 45px;
}

.accordion.has-numbering .accordion-item.active:before {
  background: #256be6;
  color: #fff;
}

/**
 * Payment system works section
 */
.ps-works .video-box, .ps-works .video-box-round {
  padding: 0 100px;
}

@media screen and (max-width: 1440px) {
  .ps-works .video-box, .ps-works .video-box-round {
    padding: 0 50px;
  }
}

@media screen and (max-width: 1199px) {
  .ps-works .video-box, .ps-works .video-box-round {
    padding: 0 30px;
  }
}

@media screen and (max-width: 767px) {
  .ps-works .video-box, .ps-works .video-box-round {
    padding: 0 15px;
  }
}

.ps-works .video-box:after, .ps-works .video-box-round:after {
  background-color: #123d88;
  -webkit-clip-path: polygon(40% 0, 100% 0, 100% 100%, 0 100%);
  clip-path: polygon(40% 0, 100% 0, 100% 100%, 0 100%);
  max-width: 730px;
  height: calc(100% + 140px);
  top: -70px;
  left: auto;
  z-index: -1;
}

@media screen and (max-width: 1199px) {
  .ps-works .video-box:after, .ps-works .video-box-round:after {
    height: calc(100% + 60px);
    top: -30px;
  }
}

.faq-tab .nav {
  border: none;
  margin-bottom: 40px;
}

.faq-tab .nav a {
  background-color: #fff;
  border: 1px solid #f1f1f1;
  border-radius: 5px;
  color: #2f2f35;
  display: block;
  font-size: 18px;
  font-weight: 500;
  text-transform: capitalize;
  text-align: center;
  padding: 30px 10px 20px;
}

.faq-tab .nav a img, .faq-tab .nav a .roysha-icon {
  display: block;
  width: 70px;
  margin: 0 auto 24px;
}

@media screen and (max-width: 767px) {
  .faq-tab .nav a img, .faq-tab .nav a .roysha-icon {
    margin-bottom: 10px;
  }
}

.faq-tab .nav a.active {
  background-color: #d10936;
  border-color: #d10936;
  color: #fff;
}

.faq-tab .nav a.active .roysha-icon span:before {
  color: #fff;
}

.faq-tab .nav a.active img {
  -webkit-filter: brightness(0) invert(1);
  filter: brightness(0) invert(1);
}

.steps {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
}

.steps li {
  color: #2f2f35;
  -ms-flex-preferred-size: 25%;
  flex-basis: 25%;
  font-size: 16px;
  font-weight: 500;
  text-align: center;
  text-transform: capitalize;
  position: relative;
}

@media screen and (max-width: 767px) {
  .steps li {
    font-size: 14px;
  }
}

@media screen and (max-width: 575px) {
  .steps li {
    font-size: 12px;
    -ms-flex-preferred-size: 50%;
    flex-basis: 50%;
  }
}

.steps li:not(:first-child):before {
  content: '';
  position: absolute;
  top: 15px;
  left: -10px;
  right: 0;
  bottom: 0;
  background-color: #f5f5f5;
  border-top: 1px solid #e0e0e0;
  border-bottom: 1px solid #e0e0e0;
  height: 5px;
  width: 45%;
}

.steps li:not(:last-child):after {
  content: '';
  position: absolute;
  top: 15px;
  left: auto;
  right: -10px;
  bottom: 0;
  background-color: #f5f5f5;
  border-top: 1px solid #e0e0e0;
  border-bottom: 1px solid #e0e0e0;
  height: 5px;
  width: 45%;
}

@media screen and (max-width: 575px) {
  .steps li {
    margin-bottom: 30px;
  }
  .steps li:nth-child(even):after {
    content: none;
  }
  .steps li:nth-child(odd):before {
    content: none;
  }
}

.steps li span {
  background-color: #fff;
  border: 1px solid #e0e0e0;
  border-radius: 50%;
  color: #6c6c6f;
  display: block;
  font-size: 16px;
  line-height: 35px;
  margin: 0 auto 25px;
  position: relative;
  height: 35px;
  width: 35px;
}

.steps li span:before {
  content: '';
  position: absolute;
  top: -6px;
  left: -6px;
  right: 0;
  bottom: 0;
  background-color: #f5f5f5;
  border: 1px solid #dfdfdf;
  border-radius: 50%;
  height: 45px;
  width: 45px;
  z-index: -1;
}

.steps li p {
  color: #6c6c6f;
  font-weight: 400;
}

.steps.vertical {
  display: block;
}

.steps.vertical li {
  text-align: left;
  padding-left: 67px;
}

.steps.vertical li:before {
  content: none;
}

.steps.vertical li:after {
  border: none;
  border-left: 1px solid #e0e0e0;
  border-right: 1px solid #e0e0e0;
  top: 41px;
  left: 20px;
  height: 100%;
  width: 5px;
  z-index: -2;
}

.steps.vertical li span {
  margin: 0;
  position: absolute;
  left: 5px;
  top: 5px;
  text-align: center;
}

/**
 * Landing overview section
 */
.landing-overview .boxed-shadow {
  padding-left: 20px;
  padding-right: 20px;
}

@media screen and (max-width: 991px) {
  .landing-overview .boxed-shadow {
    margin-bottom: 30px;
  }
}

.landing-overview .no-gutters {
  -webkit-box-shadow: 0px 5px 30px 0px rgba(0, 0, 0, 0.05);
  box-shadow: 0px 5px 30px 0px rgba(0, 0, 0, 0.05);
}

.landing-overview .no-gutters .iconBox {
  -webkit-box-shadow: none;
  box-shadow: none;
  -webkit-transition: all 300ms ease-in-out;
  -o-transition: all 300ms ease-in-out;
  transition: all 300ms ease-in-out;
}

.landing-overview .no-gutters .iconBox p {
  -webkit-transition: all 300ms ease-in-out;
  -o-transition: all 300ms ease-in-out;
  transition: all 300ms ease-in-out;
}

.landing-overview .no-gutters .iconBox .roysha-icon span::before {
  -webkit-transition: all 300ms ease-in-out;
  -o-transition: all 300ms ease-in-out;
  transition: all 300ms ease-in-out;
}

.landing-overview .no-gutters .iconBox:hover {
  background-color: #2e6de0;
}

.landing-overview .no-gutters .iconBox:hover .roysha-icon span:before {
  color: #fff !important;
}

.landing-overview .no-gutters .iconBox:hover img {
  -webkit-filter: brightness(0) invert(1);
  filter: brightness(0) invert(1);
}

.landing-overview .no-gutters .iconBox:hover h5 a, .landing-overview .no-gutters .iconBox:hover p {
  color: #fff;
}

/**
 * System works section
 */
.system-works .cmn-tab-nav {
  max-width: 565px;
  margin: 0 auto 100px;
}

.cmn-tab-nav {
  border: 1px solid #dadada;
  border-radius: 5px;
  display: block;
  position: relative;
  overflow: hidden;
}

@media screen and (min-width: 576px) {
  .cmn-tab-nav {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
  }
}

.cmn-tab-nav li {
  display: block;
}

@media screen and (min-width: 576px) {
  .cmn-tab-nav li {
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
  }
}

.cmn-tab-nav li a {
  background-color: #f7faff;
  color: #2f2f35;
  font-weight: 500;
  display: block;
  text-align: center;
  text-transform: capitalize;
  padding: 10px;
}

@media screen and (min-width: 576px) {
  .cmn-tab-nav li a {
    border-right: 1px solid #dadada;
  }
}

@media screen and (max-width: 575px) {
  .cmn-tab-nav li a {
    border-bottom: 1px solid #dadada;
  }
}

.cmn-tab-nav li a.active {
  background-color: #f0315c;
  color: #fff;
}

.cmn-tab-nav li:last-child a {
  border: none;
}

.list-tab-nav {
  border-color: #dadada;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
}

@media screen and (max-width: 575px) {
  .list-tab-nav {
    border: none;
  }
}

.list-tab-nav li {
  -webkit-box-flex: 1;
  -ms-flex: 1;
  flex: 1;
}

@media screen and (max-width: 575px) {
  .list-tab-nav li {
    -ms-flex-preferred-size: 100%;
    flex-basis: 100%;
  }
}

.list-tab-nav li a {
  border-bottom: 3px solid transparent;
  color: #2f2f35;
  display: block;
  font-size: 16px;
  font-weight: 500;
  text-align: center;
  padding-bottom: 20px;
}

@media screen and (max-width: 767px) {
  .list-tab-nav li a {
    font-size: 13px;
  }
}

@media screen and (max-width: 575px) {
  .list-tab-nav li a {
    border-bottom: 1px solid #dadada;
    padding: 10px 0;
  }
}

.list-tab-nav li a.active {
  border-color: #256be6;
  color: #256be6;
}

/**
 * Benefits section
 */
.benefits .list-tab-nav {
  margin-bottom: 80px;
}

@media screen and (max-width: 767px) {
  .benefits .video-box, .benefits .video-box-round {
    margin-bottom: 50px;
  }
}

/**
 * Fun facts section
 */
.funfacts {
  background-image: url("../images/banner/13.jpg");
  background-size: cover;
  background-position: center top;
  background-repeat: no-repeat;
}

.funfacts .sec-heading h2, .funfacts .sec-heading p {
  color: #fff;
}

@media screen and (max-width: 479px) {
  .funfacts .btn {
    display: block;
  }
}

.funfacts .btn:first-of-type {
  margin-right: -25px;
  position: relative;
  z-index: 1;
}

@media screen and (max-width: 479px) {
  .funfacts .btn:first-of-type {
    margin-right: 0;
    margin-bottom: 20px;
  }
}

.funfacts .fun-group {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  margin-top: 140px;
}

.funfacts .fun-group li {
  color: #fff;
  -webkit-box-flex: 1;
  -ms-flex: 1;
  flex: 1;
  text-align: center;
}

@media screen and (max-width: 575px) {
  .funfacts .fun-group li {
    -ms-flex-preferred-size: 50%;
    flex-basis: 50%;
    margin-bottom: 30px;
  }
}

.funfacts .fun-group li span {
  display: block;
  font-size: 30px;
  font-weight: 500;
}

/**
 * Package section
 */
.package {
  position: relative;
}

.package-table table {
  width: 100%;
}

.package-table th {
  background-color: #256be6;
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  text-transform: capitalize;
  padding: 15px 20px;
}

@media screen and (max-width: 575px) {
  .package-table th {
    font-size: 15px;
  }
}

@media screen and (max-width: 400px) {
  .package-table th {
    padding: 15px;
  }
}

.package-table th:first-of-type {
  border-top-left-radius: 5px;
}

.package-table th:last-of-type {
  border-top-right-radius: 5px;
}

.package-table th:not(:first-of-type) {
  text-align: center;
}

.package-table td {
  border: 1px solid #e5e5e5;
  color: #2f2f35;
  padding: 15px 20px;
}

@media screen and (max-width: 575px) {
  .package-table td {
    font-size: 14px;
  }
}

@media screen and (max-width: 400px) {
  .package-table td {
    padding: 15px;
  }
}

.package-table td:not(:first-of-type) {
  text-align: center;
}

.package-table td .fa-check-circle {
  color: #2dbe61;
}

.package-table td .fa-times-circle {
  color: #f53212;
}

/**
 * About overview section
 */
@media screen and (max-width: 991px) {
  .about-overview .iconBox {
    margin-bottom: 30px;
  }
}

.about-overview .boxed-shadow {
  border: 1px solid #f1f1f1;
  padding-left: 20px;
  padding-right: 20px;
}

/**
 * Mission & Vision section
 */
@media screen and (max-width: 575px) {
  .mission-vision .imgBox {
    width: calc(100% - 30px);
  }
}

.mission-vision .imgBox:before {
  content: '';
  position: absolute;
  top: auto;
  left: auto;
  right: -30px;
  bottom: -30px;
  background-color: #d8d8d8;
  width: 100%;
  height: 100%;
  z-index: -1;
}

/**
 * Banking partners section
 */
.bank-partners .bankImg {
  margin-bottom: 30px;
}

.bank-partners .memb-info {
  position: relative;
}

/**
 * Team section
 */
.team .team-member {
  -webkit-box-shadow: 0px 5px 30px 0px rgba(0, 0, 0, 0.05);
  box-shadow: 0px 5px 30px 0px rgba(0, 0, 0, 0.05);
  position: relative;
  -webkit-transition: all 300ms ease-in-out;
  -o-transition: all 300ms ease-in-out;
  transition: all 300ms ease-in-out;
}

@media screen and (max-width: 991px) {
  .team .team-member {
    margin-bottom: 30px;
  }
}

.team .team-member:hover {
  -webkit-box-shadow: 0px 5px 30px 0px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 5px 30px 0px rgba(0, 0, 0, 0.1);
  margin-top: -5px;
}

.team .team-member .memb-thumb {
  display: block;
  width: 100%;
}

.team .team-member .memb-info {
  background-color: #fff;
  display: block;
  text-align: center;
  padding: 15px;
}

.team .team-member .memb-info h6, .team .team-member .memb-info a {
  color: #2f2f35;
  font-size: 20px;
}

.team .team-member .memb-info span {
  color: #6c6c6f;
}

/**
 * Faq page section
 */
.faq-page .form-field:first-of-type {
  -ms-flex-preferred-size: 100%;
  flex-basis: 100%;
}

.faq-page .form-txt {
  color: #fff;
  display: block;
  text-align: center;
  width: 100%;
}

/**
 * Contact section
 */
.contact-from-wrap {
  background-color: #fff;
  -webkit-box-shadow: 0px 5px 30px 0px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 5px 30px 0px rgba(0, 0, 0, 0.1);
  padding: 40px;
}

.contact-from-wrap .sec-heading {
  text-align: left;
  margin-bottom: 32px;
}

.contact-from-wrap .contact-form .form-group {
  margin-bottom: 33px;
}

.contact-from-wrap .contact-form label {
  color: #2f2f35;
  display: block;
  font-size: 16px;
  font-weight: 500;
  margin-bottom: 8px;
}

.contact-from-wrap .contact-form .form-control {
  border-color: #dadada;
  padding: 15px 20px;
  height: auto;
}

.contact-from-wrap .contact-form .btn {
  max-width: 150px;
  min-width: auto;
  width: 100%;
  float: right;
}

.contact-info-wrap {
  background-color: #f0315c;
  font-size: 15px;
  padding: 100px 40px;
}

.contact-info-wrap address {
  color: #fff;
  padding-left: 65px;
  margin-bottom: 50px;
  position: relative;
}

.contact-info-wrap address span {
  display: block;
  font-size: 18px;
  font-weight: 500;
  margin-bottom: 7px;
}

.contact-info-wrap address a {
  color: #fff;
  display: block;
}

.contact-info-wrap address i {
  background-color: #fff;
  border-radius: 50%;
  color: #256be6;
  font-size: 16px;
  line-height: 40px;
  text-align: center;
  position: absolute;
  left: 0;
  top: 0;
  height: 40px;
  width: 40px;
}

/**
 * Contact Media section
 */
.contact-media .cm-box {
  background-color: #fff;
  border: 1px solid #dadada;
  border-radius: 5px;
  color: #2f2f35;
  display: block;
  font-size: 16px;
  font-weight: 500;
  line-height: .8;
  text-align: center;
  -webkit-transition: all 300ms ease-in-out;
  -o-transition: all 300ms ease-in-out;
  transition: all 300ms ease-in-out;
  padding: 30px 15px;
}

@media screen and (max-width: 991px) {
  .contact-media .cm-box {
    margin-bottom: 30px;
  }
}

.contact-media .cm-box i {
  display: block;
  font-size: 28px;
  margin-bottom: 20px;
  -webkit-transition: all 300ms ease-in-out;
  -o-transition: all 300ms ease-in-out;
  transition: all 300ms ease-in-out;
}

.contact-media .cm-box i[class*="facebook"] {
  color: #3b5999;
}

.contact-media .cm-box i[class*="twitter"] {
  color: #1da1f2;
}

.contact-media .cm-box i[class*="instagram"] {
  color: #316d8c;
}

.contact-media .cm-box i[class*="vimeo"] {
  color: #1ab7ea;
}

.contact-media .cm-box i[class*="youtube"] {
  color: #eb1d1d;
}

.contact-media .cm-box i[class*="linkedin"] {
  color: #0077b5;
}

.contact-media .cm-box:hover {
  background-color: #399fed;
  color: #fff;
}

.contact-media .cm-box:hover i {
  color: #fff;
}

/**
 * Blog Post section
 */
.post-item {
  border-bottom: 1px solid #dadada;
  margin-bottom: 40px;
  padding-bottom: 30px;
  position: relative;
}

.post-item h3 {
  color: #262934;
  font-size: 30px;
  margin-bottom: 14px;
}

@media screen and (max-width: 767px) {
  .post-item h3 {
    font-size: 25px;
  }
}

.post-item h3 a {
  color: #262934;
  display: block;
}

.post-item p {
  color: #2f2f35;
  line-height: 30px;
  margin-bottom: 0;
}

.post-item .post-thumb {
  margin-bottom: 23px;
}

.post-item .post-meta {
  position: relative;
  margin-bottom: 9px;
}

.post-item .post-meta span, .post-item .post-meta a {
  color: #6c6c6f;
  display: inline-block;
  font-size: 14px;
  font-weight: 400;
}

.post-item .post-meta a {
  color: #004bc9;
  display: inline-block;
  font-weight: 500;
}

.post-item .btn-default {
  display: inline-block;
  padding: 18px 30px;
  margin-top: 20px;
  min-width: auto;
}

.publish-date {
  color: #6c6c6f;
  display: inline-block;
  font-size: 14px;
}

.pagination {
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  text-align: center;
  position: relative;
}

@media screen and (max-width: 767px) {
  .pagination {
    margin-bottom: 50px;
  }
}

@media screen and (max-width: 479px) {
  .pagination {
    display: block;
  }
}

.pagination a:not(.prev):not(.next),
.pagination .current {
  background-color: #e6e6e6;
  border-radius: 5px;
  color: #1577df;
  display: inline-block;
  line-height: 45px;
  text-align: center;
  margin: 0 3px;
  height: 45px;
  width: 45px;
}

.pagination a:hover, .pagination .current {
  background-color: #1577df !important;
  color: #fff !important;
}

.pagination .prev,
.pagination .next {
  border: 1px solid #1577df;
  border-radius: 5px;
  font-weight: 500;
  color: #1577df;
  text-align: center;
  padding: 8px 15px;
  height: 45px;
  width: 120px;
}

.pagination .prev:hover,
.pagination .next:hover {
  background-color: #1577df;
  color: #fff;
}

@media screen and (max-width: 479px) {
  .pagination .prev,
  .pagination .next {
    display: block;
    margin-top: 30px;
  }
}

.pagination .prev {
  margin-right: auto;
}

@media screen and (max-width: 479px) {
  .pagination .prev {
    position: absolute;
    bottom: 0;
  }
}

.pagination .next {
  margin-left: auto;
}

.breadcrumb {
  background-color: transparent;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
}

.breadcrumb a, .breadcrumb span {
  color: #fff;
  display: inline-block;
  text-transform: capitalize;
  padding: 0 15px;
  position: relative;
}

.breadcrumb a:after {
  content: '\f105';
  font-family: "Font Awesome 5 Free";
  font-weight: 900;
  position: absolute;
  right: 0;
  top: 2px;
}

.sidebar {
  position: relative;
}

.sidebar .widget {
  margin-bottom: 60px;
  position: relative;
}

.sidebar .widget .widget-title {
  color: #2f2f35;
  font-size: 24px;
  margin-bottom: 24px;
}

.sidebar .widget_search form {
  display: block;
  position: relative;
  width: 100%;
}

.sidebar .widget_search form input {
  border: 1px solid #f1f1f1;
  border-radius: 5px;
  display: block;
  padding: 15px 60px 15px 20px;
  width: 100%;
}

.sidebar .widget_search form i {
  cursor: pointer;
  position: absolute;
  top: 50%;
  right: 25px;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.sidebar .widget_categories ul li {
  border-bottom: 1px solid #dadada;
  position: relative;
}

.sidebar .widget_categories ul li a {
  color: #2f2f35;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  text-transform: capitalize;
  padding: 10px 0;
}

.sidebar .widget_categories ul li a span {
  color: #6c6c6f;
  display: inline-block;
  margin-left: auto;
}

.sidebar .widget_categories ul li a:after {
  content: '';
  position: absolute;
  top: auto;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #256be6;
  -webkit-transition: all 300ms ease-in-out;
  -o-transition: all 300ms ease-in-out;
  transition: all 300ms ease-in-out;
  height: 1px;
  width: 0;
}

.sidebar .widget_categories ul li a:hover {
  color: #1577df;
}

.sidebar .widget_categories ul li a:hover::after {
  width: 100%;
}

.sidebar .widget_recent_entries ul li {
  border-bottom: 1px solid #dadada;
  margin-bottom: 30px;
  padding-bottom: 30px;
  position: relative;
}

.sidebar .widget_recent_entries ul li a {
  color: #2f2f35;
  display: block;
  font-size: 18px;
  line-height: 28px;
}

.sidebar .widget_recent_entries ul li a:after {
  content: '';
  position: absolute;
  top: auto;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #256be6;
  -webkit-transition: all 300ms ease-in-out;
  -o-transition: all 300ms ease-in-out;
  transition: all 300ms ease-in-out;
  height: 1px;
  width: 0;
}

.sidebar .widget_recent_entries ul li a:hover {
  color: #1577df;
}

.sidebar .widget_recent_entries ul li a:hover::after {
  width: 100%;
}

@media screen and (max-width: 767px) {
  .sidebar .widget_recent_entries ul li a {
    font-size: 16px;
  }
}

.sidebar .widget_recent_entries ul li span {
  display: block;
}

.sidebar .tag-cloud {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
}

.sidebar .tag-cloud a {
  border: 1px solid #dadada;
  border-radius: 5px;
  color: #6c6c6f;
  -ms-flex-preferred-size: calc(100% / 3 - 5px);
  flex-basis: calc(100% / 3 - 5px);
  text-align: center;
  padding: 10px;
  margin-right: 5px;
  margin-bottom: 5px;
}

.sidebar .tag-cloud a:hover {
  border-color: #1577df;
  background-color: #1577df;
  color: #fff;
}

@media screen and (max-width: 991px) {
  .sidebar .tag-cloud a {
    font-size: 14px;
  }
}

/**
 * Blog single post section
 */
.blog-single-post .post-item {
  border: none;
  padding-bottom: 0;
}

.blog-single-post .post-item p {
  margin-bottom: 20px;
}

.social-share {
  border-top: 1px solid #dadada;
  border-bottom: 1px solid #dadada;
  padding: 15px 0;
  margin-bottom: 50px;
}

.social-share label {
  color: #2f2f35;
  font-size: 18px;
  font-weight: 500;
  margin-right: 20px;
  margin-bottom: 0;
}

.social-share a {
  background-color: #ddd;
  border-radius: 50%;
  color: #fff;
  display: inline-block;
  line-height: 40px;
  text-align: center;
  margin: 0 7px;
  height: 40px;
  width: 40px;
}

@media screen and (max-width: 479px) {
  .social-share a {
    font-size: 14px;
    line-height: 30px;
    margin: 0 4px;
    height: 30px;
    width: 30px;
  }
}

.comments {
  margin-bottom: 50px;
}

.comments .comment-title {
  color: #2f2f35;
  padding-bottom: 0;
  margin-bottom: 30px;
}

.comments ul {
  list-style: none;
}

.comments ul li {
  position: relative;
  margin-bottom: 34px;
}

.comments ul li h4 {
  color: #2f2f35;
  font-size: 18px;
  margin-bottom: 4px;
}

.comments ul li a {
  color: #1577df;
  display: inline-block;
  font-size: 14px;
}

.comments ul li a:first-of-type {
  padding-left: 0;
}

.comments p {
  color: #2f2f35;
  margin-bottom: 10px;
}

@media screen and (max-width: 575px) {
  .comments p {
    font-size: 14px;
  }
}

.comments .single-comment {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  margin-bottom: 30px;
  position: relative;
}

.comments .comments-body {
  border-bottom: 1px solid #dadada;
  -ms-flex-preferred-size: calc(100% - 80px);
  flex-basis: calc(100% - 80px);
  padding-bottom: 25px;
}

.comments .user-thumb {
  border-radius: 50%;
  -ms-flex-preferred-size: 60px;
  flex-basis: 60px;
}

@media screen and (min-width: 361px) {
  .comment-form {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
  }
}

@media screen and (max-width: 767px) {
  .comment-form {
    margin-bottom: 50px;
  }
}

.comment-form .user-thumb {
  border-radius: 50%;
  -ms-flex-preferred-size: 60px;
  flex-basis: 60px;
  width: 60px;
}

@media screen and (max-width: 360px) {
  .comment-form .user-thumb {
    margin-bottom: 20px;
  }
}

.comment-form form {
  -ms-flex-preferred-size: calc(100% - 80px);
  flex-basis: calc(100% - 80px);
}

.comment-form form textarea {
  background-color: #f6f6f6;
  border: 1px solid #dadada;
  border-radius: 5px;
  margin-bottom: 25px;
  padding: 20px;
  width: 100%;
}

.comment-form form .btn {
  display: block;
  min-width: auto;
  margin: 0;
  margin-left: 0px;
  padding-left: 40px;
  padding-right: 40px;
}

/**
 * 404 Error section
 */
.error-page .header, .error-page .header02, .error-page .header03, .error-page .header04 {
  background-color: #256be6;
  position: relative;
}

.error-page .sec-heading {
  margin-bottom: 40px;
}

/**
 * Signup Login form section
 */
.signup-login {
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
}

.signup-login .sl-slider-caro {
  background-color: #256be6;
  position: relative;
  padding: 10% 0 5%;
}

@media screen and (min-width: 992px) {
  .signup-login .sl-slider-caro {
    -ms-flex-preferred-size: 54.687%;
    flex-basis: 54.687%;
    max-width: 54.687%;
  }
}

@media screen and (max-width: 991px) {
  .signup-login .sl-slider-caro {
    -webkit-box-ordinal-group: 2;
    -ms-flex-order: 1;
    order: 1;
  }
}

.signup-login .sl-slider-caro:before {
  background-color: #1b5ccf;
  -webkit-clip-path: polygon(0 70%, 40% 0, 60% 0, 100% 70%, 100% 100%, 0 100%);
  clip-path: polygon(0 70%, 40% 0, 60% 0, 100% 70%, 100% 100%, 0 100%);
  content: '';
  position: absolute;
  top: auto;
  left: 0;
  right: 0;
  bottom: 0;
  height: 50%;
  width: 100%;
  z-index: 0;
}

.signup-login .sl-slider-caro .single-sl-slide img {
  max-width: 763px;
  margin: 0 auto 40px;
}

.signup-login .sl-slider-caro .content-box, .signup-login .sl-slider-caro .content-box-fluid {
  max-width: 495px;
  margin: 0 auto;
  text-align: center;
}

.signup-login .sl-slider-caro .content-box h2, .signup-login .sl-slider-caro .content-box-fluid h2, .signup-login .sl-slider-caro .content-box p, .signup-login .sl-slider-caro .content-box-fluid p {
  color: #fff;
}

.signup-login .sl-slider-caro .owl-dots {
  text-align: center;
  position: relative;
}

.signup-login .sl-slider-caro .owl-dots span {
  background-color: #134090;
  border-radius: 50%;
  display: inline-block;
  margin: 0 2px;
  height: 10px;
  width: 10px;
}

.signup-login .sl-slider-caro .owl-dots .active span {
  background-color: #fff;
}

.signup-login .sl-form-wrap {
  padding: 50px 60px;
}

@media screen and (min-width: 992px) {
  .signup-login .sl-form-wrap {
    -ms-flex-preferred-size: 45.312%;
    flex-basis: 45.312%;
    max-width: 45.312%;
  }
}

@media screen and (max-width: 991px) {
  .signup-login .sl-form-wrap {
    -webkit-box-ordinal-group: 1;
    -ms-flex-order: 0;
    order: 0;
    width: 100%;
  }
}

@media screen and (max-width: 575px) {
  .signup-login .sl-form-wrap {
    padding-left: 40px;
    padding-right: 40px;
  }
}

@media screen and (max-width: 360px) {
  .signup-login .sl-form-wrap {
    padding-left: 15px;
    padding-right: 15px;
  }
}

.signup-login .sl-form-wrap header {
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  margin-bottom: 100px;
}

.signup-login .sl-form-wrap .logo {
  display: inline-block;
  max-width: 138px;
}

.signup-login .sl-form-wrap .mbl-menu-toggler {
  color: #262934;
}

@media screen and (max-width: 991px) {
  .signup-login .sl-form-wrap .content-box, .signup-login .sl-form-wrap .content-box-fluid {
    text-align: center;
  }
}

@media screen and (max-width: 767px) {
  .signup-login .sl-form-wrap .content-box br, .signup-login .sl-form-wrap .content-box-fluid br {
    display: none;
  }
}

.signup-login .sl-form {
  max-width: 450px;
  width: 100%;
}

@media screen and (max-width: 991px) {
  .signup-login .sl-form {
    margin: 0 auto;
  }
}

.signup-login .sl-form .form-group {
  position: relative;
  margin-bottom: 30px;
}

.signup-login .sl-form .form-group label {
  color: #2f2f35;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  font-weight: 500;
}

.signup-login .sl-form .form-group input:not([type="checkbox"]) {
  border: 1px solid #dadada;
  border-radius: 50px;
  display: block;
  padding: 10px 25px;
  width: 100%;
}

.signup-login .sl-form .form-check {
  margin-bottom: 30px;
}

.signup-login .sl-form .form-check label {
  color: #6c6c6f;
}

.signup-login .sl-form .form-check label a {
  color: #2f2f35;
}

.signup-login .sl-form .form-check label a:hover {
  text-decoration: underline;
}

.signup-login .sl-form .form-check input {
  margin-top: 8px;
}

.signup-login .sl-form .btn {
  margin-bottom: 30px;
  text-transform: uppercase;
}

.signup-login .sl-form .notice {
  color: #2f2f35;
}

.signup-login .sl-form .notice a {
  color: #1a9948;
}

.signup-login .sl-form .notice a:hover {
  text-decoration: underline;
}

.coming-sec {
  background-size: cover;
  background-position: center top;
  background-repeat: no-repeat;
  background-image: url("../images/banner/14.jpg");
  background-attachment: fixed;
  padding: 11% 0;
}

.coming-sec:before {
  content: '';
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  background: #004bc8;
  opacity: .7;
}

.coming-sec .bill-form {
  display: block;
}

.coming-sec .bill-form h3 {
  color: #fff;
  font-size: 24px;
  margin-bottom: 50px;
}

@media screen and (max-width: 575px) {
  .coming-sec .sec-heading {
    margin-bottom: 40px;
  }
}

.coming-sec .sec-heading h2 {
  color: #fff;
  font-size: 72px;
  line-height: 72px;
  margin-bottom: 30px;
}

@media screen and (max-width: 767px) {
  .coming-sec .sec-heading h2 {
    font-size: 62px;
  }
}

@media screen and (max-width: 575px) {
  .coming-sec .sec-heading h2 {
    font-size: 52px;
    line-height: 60px;
  }
}

@media screen and (max-width: 479px) {
  .coming-sec .sec-heading h2 {
    font-size: 33px;
    line-height: 40px;
  }
}

.coming-sec .sec-heading p {
  color: #fff;
}

.coming-sec #clock {
  color: #fff;
  margin-bottom: 100px;
}

.coming-sec #clock p {
  display: inline-block;
  font-size: 14px;
  text-transform: uppercase;
}

.coming-sec #clock span {
  background-color: #256be6;
  border-radius: 5px;
  display: block;
  font-size: 30px;
  line-height: 70px;
  margin: 15px 2px 0;
  position: relative;
  height: 70px;
  width: 50px;
  z-index: 1;
}

.coming-sec #clock span:after {
  content: '';
  position: absolute;
  top: 50%;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #002563;
  height: 1px;
  width: 100%;
  z-index: -1;
}

/**
 * Receive works
 */
.receive-works .cmn-tab-nav {
  max-width: 770px;
  margin: 0 auto 100px;
}

.receive-works .cmn-tab-nav li a {
  position: relative;
}

.receive-works .cmn-tab-nav li a .nav-arrow {
  background-color: #dadada;
  display: block;
  -webkit-clip-path: polygon(0 0, 100% 50%, 0 100%);
  clip-path: polygon(0 0, 100% 50%, 0 100%);
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  -webkit-transition: all 300ms ease-in-out;
  -o-transition: all 300ms ease-in-out;
  transition: all 300ms ease-in-out;
  position: absolute;
  height: 12px;
  width: 6px;
  z-index: 1;
}

@media screen and (min-width: 576px) {
  .receive-works .cmn-tab-nav li a .nav-arrow {
    top: 50%;
    left: 100%;
  }
}

@media screen and (max-width: 575px) {
  .receive-works .cmn-tab-nav li a .nav-arrow {
    bottom: -9px;
    top: auto;
    left: 0;
    right: 0;
    -webkit-transform: translateY(0) rotate(90deg);
    -ms-transform: translateY(0) rotate(90deg);
    transform: translateY(0) rotate(90deg);
    margin: 0 auto;
  }
}

.receive-works .cmn-tab-nav li a .nav-arrow:after {
  content: '';
  position: absolute;
  top: 1px;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #f7faff;
  -webkit-clip-path: polygon(0 0, 100% 50%, 0 100%);
  clip-path: polygon(0 0, 100% 50%, 0 100%);
  -webkit-transition: all 300ms ease-in-out;
  -o-transition: all 300ms ease-in-out;
  transition: all 300ms ease-in-out;
  height: 10px;
  width: 5px;
}

.receive-works .cmn-tab-nav li a.active .nav-arrow {
  background-color: #256be6;
}

.receive-works .cmn-tab-nav li a.active .nav-arrow:after {
  background-color: #256be6;
}

/**
 * Landing Ecommerce
 */
@media screen and (max-width: 991px) {
  .landing-ecommerce .boxed-shadow {
    margin-bottom: 0;
  }
}

@media (min-width: 575px) {
  .footer .foo-nav ul {
    display: block !important;
  }
  .footer .widget h5 i {
    display: none !important;
  }
}

@media screen and (max-width: 575px) {
  .footer .foo-nav ul {
    margin-top: 15px;
  }
}

img.an1, .rcvMobile {
  position: absolute;
  bottom: 0;
  left: auto;
  max-width: 100%;
}

.home-two img.an1.animg3 {
  position: relative;
}

img.an1.leaf {
  position: relative;
}

img.an1.animg5 {
  top: 100%;
}

.animg1, .animg2 {
  -webkit-transform-origin: 35.7% 79.8%;
  -ms-transform-origin: 35.7% 79.8%;
  transform-origin: 35.7% 79.8%;
}

.an3 {
  position: absolute;
  -webkit-transform-origin: 54% 86%;
  -ms-transform-origin: 54% 86%;
  transform-origin: 54% 86%;
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  width: 100%;
}

.ani4img1, .ani4img2 {
  position: absolute;
  top: 0;
  -webkit-transform-origin: 22.3% 83.7%;
  -ms-transform-origin: 22.3% 83.7%;
  transform-origin: 22.3% 83.7%;
}

.ani5:not(.ani5img1) {
  position: absolute;
  top: 0;
}

.ani7:not(.ani7img1) {
  position: absolute;
  top: 0;
}

.ani7 {
  -webkit-transform-origin: 47.3% 50%;
  -ms-transform-origin: 47.3% 50%;
  transform-origin: 47.3% 50%;
}


</style>