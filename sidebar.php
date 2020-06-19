<div id="sidebar">
  <div class="block" id="chart">
    <div class="blocktitle"><i class="icon top"></i>
      <div class="title">Phim xem nhiều</div>
    </div>
    <div class="blockbody" id="topview">
      <ul class="tab topviewday">
        <?php
          $sql = 'select * from `film` order by `num_view` DESC limit 10';
          $query = mysqli_query($link, $sql);
          while($r=mysqli_fetch_assoc($query)){
        ?>
        <li><span class="st top">1</span>
          <div class="detail">
            <div class="name"><a href="?mod=detail&film_id=<?php echo $r['id'] ?>" title="<?php echo $r['name'] ?>"><?php echo $r['name'] ?></a></div>
            <div class="views">Lượt xem <?php echo $r['num_view'] ?></div>
          </div>
        </li>
        <?php
          }
        ?>
      </ul>
    </div>
    <script type="text/javascript">
      $('#topviewday').click(function(){
        $(this).addClass('active');
        $('#topviewweek').removeClass('active');
        $('#topviewmonth').removeClass('active');
        $('ul.topviewday').removeClass('hide');
        $('ul.topviewweek').addClass('hide');
        $('ul.topviewmonth').addClass('hide');
      })
      $('#topviewweek').click(function(){
        $(this).addClass('active');
        $('#topviewday').removeClass('active');
        $('#topviewmonth').removeClass('active');
        $('ul.topviewweek').removeClass('hide');
        $('ul.topviewday').addClass('hide');
        $('ul.topviewmonth').addClass('hide');
      })
      $('#topviewmonth').click(function(){
        $(this).addClass('active');
        $('#topviewweek').removeClass('active');
        $('#topviewday').removeClass('active');
        $('ul.topviewmonth').removeClass('hide');
        $('ul.topviewweek').addClass('hide');
        $('ul.topviewday').addClass('hide');
      })
    </script>
  </div>
</div>
