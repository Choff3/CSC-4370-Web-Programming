<html>
<head>
  <meta charset = "UTF-8">
  <title>Jeopardy!</title>
  <link rel = "stylesheet"
    type = "text/css"
    href = "/project2/style.css" />
</head>

<!-- <div class="container">
  <div class="row">
    <div class="square">11</div>
    <div class="square">12</div>
    <div class="square">13</div>
    <div class="square">14</div>
    <div class="square">15</div>
    <div class="square">16</div>
    <div class="square">17</div>
    <div class="square">18</div>
  </div>
  <div class="row">
    <div class="square">21</div>
    <div class="square">22</div>
    <div class="square">23</div>
    <div class="square">24</div>
    <div class="square">25</div>
    <div class="square">26</div>
    <div class="square">27</div>
    <div class="square">28</div>
  </div>
  <div class="row">
    <div class="square">31</div>
    <div class="square">32</div>
    <div class="square">33</div>
    <div class="square">34</div>
    <div class="square">35</div>
    <div class="square">36</div>
    <div class="square">37</div>
    <div class="square">38</div>
  </div>
</div> -->

<div class="container">
  <div class="row">
    <?php
      for($i=1;$i<7;$i++){
        echo '<div class="square">'.$i.'</div>';
      }
    ?>
  </div>
  <div class="row">
    <?php
      for($i=7;$i<13;$i++){
        echo '<div class="square">$100</div>';
      }
    ?>
  </div>
  <div class="row">
    <?php
      for($i=13;$i<19;$i++){
        echo '<div class="square">$200</div>';
      }
    ?>
  </div>
  <div class="row">
    <?php
      for($i=19;$i<25;$i++){
        echo '<div class="square">$300</div>';
      }
    ?>
  </div>
  <div class="row">
    <?php
      for($i=25;$i<31;$i++){
        echo '<div class="square">$400</div>';
      }
    ?>
  </div>
  <div class="row">
    <?php
      for($i=31;$i<37;$i++){
        echo '<div class="square">$500</div>';
      }
    ?>
  </div>
</div>
</html>