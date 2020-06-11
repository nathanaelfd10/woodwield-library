<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<!-- ICON <link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" /> -->
<title>Browse</title>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/svgs/fi-list.svg'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="css/main-1.css">
<style>
body {
  background-image: url('/images/bg-12.jpg');
  background-color: #89FAD0;
}



#carousel {
  position: absolute;
  height: 200px;
  width: 810px;
  margin: auto;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
}

.arrow {
  position: absolute;
  width: 30px;
  height: 30px;
  background-color: white;
  text-align: center;
  font-size: 25px;
  border-radius: 50%;
  cursor: pointer;
  font-size: 20px;
  color: #228291;
  line-height: 30px;
  margin-top: 85px;
  z-index: 1000;
}

.arrow-right {
  left: 780px;
}

.item {
  text-align: center;
  color: white;
  font-size: 40px;
  position: absolute;
  transition: height 1s, width 1s, left 1s, margin-top 1s, line-height 1s, background-color 1s;
  
}

.level-2 {
  height: 150px;
  width: 110px;
  line-height: 150px;
  background-color: #228291;
  left: 650px;
  margin-top: 25px;
}

.level-1 {
  height: 180px;
  width: 130px;
  line-height: 180px;
  background-color: #6796E5;
  left: 500px;
  margin-top: 10px;
}

.level0 {
  height: 200px;
  width: 150px;
  line-height: 200px;
  background-color: #4EC9E1;
  left: 330px;
}

.level1 {
  height: 180px;
  width: 130px;
  line-height: 180px;
  background-color: #6796E5;
  margin-top: 10px;
  left: 180px;
}

.level2 {
  height: 150px;
  width: 110px;
  line-height: 150px;
  background-color: #228291;
  margin-top: 25px;
  left: 50px;
}

.left-enter {
  opacity: 0;
  left: -60px;
  height: 120px;
  width: 90px;
  line-height: 120px;
  margin-top: 40px;
}

.left-enter.left-enter-active {
  opacity: 1;
  left: 50px;
  height: 150px;
  width: 110px;
  line-height: 150px;
  margin-top: 25px;
  transition: left 1s, opacity 1s, height 1s, width 1s, margin-top 1s, line-height 1s;
}

.left-leave {
  opacity: 1;
  left: 650px;
  height: 150px;
  width: 110px;
  line-height: 150px;
  margin-top: 25px;
}

.left-leave.left-leave-active {
  left: 780px;
  opacity: 0;
  height: 120px;
  line-height: 120px;
  margin-top: 40px;
  width: 90px;
  transition: left 1s, opacity 1s, height 1s, width 1s, margin-top 1s, line-height 1s;
}

.right-enter {
  opacity: 0;
  left: 760px;
  height: 120px;
  width: 90px;
  line-height: 120px;
  margin-top: 40px;
}

.right-enter.right-enter-active {
  left: 650px;
  opacity: 1;
  height: 150px;
  margin-top: 25px;
  line-height: 150px;
  width: 110px;
  transition: left 1s, opacity 1s, height 1s, width 1s, margin-top 1s, line-height 1s;
}

.right-leave {
  left: 50px;
  height: 150px;
  opacity: 1;
  margin-top: 25px;
  line-height: 150px;
  width: 110px;
}

.right-leave.right-leave-active {
  left: -60px;
  opacity: 0;
  height: 120px;
  width: 90px;
  line-height: 120px;
  margin-top: 40px;
  transition: left 1s, opacity 1s, height 1s, width 1s, margin-top 1s, line-height 1s;
}

.noselect {
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}


</style>
<script>
  window.console = window.console || function(t) {};
</script>
<script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
</head>

<body translate="no" id="top">




<?php include 'navbar.php';?>

<div class="fullpg">

<div class="bgimg-1">
  <div class="caption">
  <span class="border"></span>
  </div>
</div>





<div class="container-sm position-fixed" style="background-color:rgba(200,200,200,0.1);color:#fff;height:100%;width:100%">
  <h3 class="position-fixed" style="text-align:center;left:47%; bottom:50%"><img src="/images/logo-nameless.png"></h3>
  <p style="text-align:center"><div class="md-form mt-0 col-2 center position-fixed" style="background-color:rgba(0,0,0,0.0);left:42%;bottom:40%">
  <form action="search.php" method="get">
  <input class="form-control" type="text" value="<?php echo isset($_GET['k']) ? $_GET['k'] : ''; ?>" placeholder="Enter your search keywords" /></td>
  </form>
</div>
</div>
  
<div class="container-sm position-fixed" style="bottom:150px; left:29%"><div id="app"></div></div>



</div>
</div>






<?php include 'login_modal.php';?>


<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/react/15.4.2/react-with-addons.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/react/15.4.2/react-dom.min.js'></script>
<script id="rendered-js">
var ReactCSSTransitionGroup = React.addons.CSSTransitionGroup;

class Carousel extends React.Component {

  constructor(props) {
    super(props);
    this.state = {
      items: this.props.items,
      active: this.props.active,
      direction: '' };

    this.rightClick = this.moveRight.bind(this);
    this.leftClick = this.moveLeft.bind(this);
  }

  generateItems() {
    var items = [];
    var level;
    console.log(this.state.active);
    for (var i = this.state.active - 2; i < this.state.active + 3; i++) {if (window.CP.shouldStopExecution(0)) break;
      var index = i;
      if (i < 0) {
        index = this.state.items.length + i;
      } else if (i >= this.state.items.length) {
        index = i % this.state.items.length;
      }
      level = this.state.active - i;
      items.push(React.createElement(Item, { key: index, id: this.state.items[index], level: level }));
    }window.CP.exitedLoop(0);
    return items;
  }

  moveLeft() {
    var newActive = this.state.active;
    newActive--;
    this.setState({
      active: newActive < 0 ? this.state.items.length - 1 : newActive,
      direction: 'left' });

  }

  moveRight() {
    var newActive = this.state.active;
    this.setState({
      active: (newActive + 1) % this.state.items.length,
      direction: 'right' });

  }

  render() {
    return (
      React.createElement("div", { id: "carousel", className: "noselect" },
      React.createElement("div", { className: "arrow arrow-left", onClick: this.leftClick }, React.createElement("i", { className: "fi-arrow-left" })),
      React.createElement(ReactCSSTransitionGroup, {
        transitionName: this.state.direction },
      this.generateItems()),

      React.createElement("div", { className: "arrow arrow-right", onClick: this.rightClick }, React.createElement("i", { className: "fi-arrow-right" }))));


  }}


class Item extends React.Component {

  constructor(props) {
    super(props);
    this.state = {
      level: this.props.level };

  }

  render() {
    const className = 'item level' + this.props.level;
    return (
      React.createElement("div", { className: className },
      this.props.id));


  }}


var items = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
ReactDOM.render(React.createElement(Carousel, { items: items, active: 0 }), document.getElementById('app'));
//# sourceURL=pen.js
    </script>
</body>
</html>
