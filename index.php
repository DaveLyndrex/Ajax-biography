<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Dave|SampleWeb</title>

<style>
html, body {
  padding: 0;
  margin: 0;
  width: 100%;
  height: 100%;
  overflow-x: hidden; }

h1 {
  font-size: 4rem;
  color: #fff;
  position: absolute;
  left: 50%;
  top: 25%;
  -webkit-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
  white-space: nowrap;
  letter-spacing: 3px; }

.btn {
  position: absolute;
  left: 50%;
  top: 40%;
  -webkit-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  transform: translateX(-50%); }

.split {
  position: absolute;
  width: 50%;
  height: 100%;
  overflow: hidden; }
  .split.left {
    left: 0;
    background:url("77.jpg") center center no-repeat;
    -webkit-background-size: cover;
    background-size: cover; }
    .split.left:before {
      position: absolute;
      content: '';
      width: 100%;
      height: 100%;
      background: rgba(43, 43, 23, 0.6); }
  .split.right {
    right: 0;
    background: url("https://images.pexels.com/photos/247791/pexels-photo-247791.png?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940") center center no-repeat;
    -webkit-background-size: cover;
    background-size: cover; }
    .split.right:before {
      position: absolute;
      content: '';
      width: 100%;
      height: 100%;
      background: rgba( 63, 81, 181, 0.3); }
  .split.left, .split.left:before, .split.right, .split.right:before {
    -webkit-transition: 1000ms all ease-in-out;
    -o-transition: 1000ms all ease-in-out;
    transition: 1000ms all ease-in-out; }

.container-custom {
  position: relative;
  width: 100%;
  height: 100%;
  background: #333; }

.hover-left .left {
  width: 75%; }

.hover-left .right {
  width: 25%; }
  .hover-left .right:before {
    z-index: 2; }

.hover-right .right {
  width: 75%; }

.hover-right .left {
  width: 25%; }
  .hover-right .left:before {
    z-index: 2; }

@media (max-width: 800px) {
  h1 {
    font-size: 2rem; }
  .btn {
    width: 12rem; } }

@media (max-height: 780px) {
  .btn {
    top: 60%; } }
</style>
</head>
<body>
    <div class="container-custom">
  <div class="split left">
    <h1 class="font-weight-bold">The Upcoming</h1>
    <a href="biography.php" type="button" class="btn btn-outline-primary waves-effect">Want to know more?</a>
  </div>
  <div class="split right">
    <h1 class="font-weight-bold">front-end Programmer</h1>
    <a href="biography.php" type="button" class="btn btn-outline-danger waves-effect">Click Here</a>

  </div>
</div>


<script>
const left = document.querySelector('.left');
const right = document.querySelector('.right');
const container = document.querySelector('.container-custom');

left.addEventListener('mouseenter', () => {
  container.classList.add('hover-left');
});

left.addEventListener('mouseleave', () => {
  container.classList.remove('hover-left');
});

right.addEventListener('mouseenter', () => {
  container.classList.add('hover-right');
});

right.addEventListener('mouseleave', () => {
  container.classList.remove('hover-right');
});
</script>
</body>
</html>