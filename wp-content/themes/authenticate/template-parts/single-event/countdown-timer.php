<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="section-heading text-center">
        <h2 class="text-uppercase">COUNTDOWN</h2>
        </div>
    </div>
</div>
<?php
$eventDateStart = strtotime(get_field('start_ev_date_time'));
 //month number start
 $check_s_month = date('M', $eventDateStart);
 if( $check_s_month == "Jan" ) {
   $check_s_month = "01";
 }elseif( $check_s_month == "Feb" ){
   $check_s_month = "02";
 }elseif( $check_s_month == "Mar" ){
   $check_s_month = "03";
 }elseif( $check_s_month == "Apr" ){
   $check_s_month = "04";
 }elseif( $check_s_month == "May" ){
   $check_s_month = "05";
 }elseif( $check_s_month == "Jun" ){
   $check_s_month = "06";
 }elseif( $check_s_month == "Jul" ){
   $check_s_month = "07";
 }elseif( $check_s_month == "Aug" ){
   $check_s_month = "08";
 }elseif( $check_s_month == "Sep" ){
   $check_s_month = "09";
 }elseif( $check_s_month == "Oct" ){
   $check_s_month = "10";
 }elseif( $check_s_month == "Nov" ){
   $check_s_month = "11";
 }else {
   $check_s_month = "12";
 }
?>
<!-- counter list  -->
<!-- <ul class="counter-list" data-target="2021-11-29T13:56:00"> -->

<ul class="counter-list" data-target="<?php echo date('Y', $eventDateStart); ?>-<?php echo $check_s_month; ?>-<?php echo date('d', $eventDateStart); ?>T13:56:00">
<li>
    <div class="counter-item">
    <span class="counter-value text-secondary months">00</span>
    <span class="counter-text">Months</span>
    </div>
</li>
<li>
    <div class="counter-item">
    <span class="counter-value text-secondary days">00</span>
    <span class="counter-text">Days</span>
    </div>
</li>
<li>
    <div class="counter-item">
    <span class="counter-value text-secondary hours">00</span>
    <span class="counter-text">Hours</span>
    </div>
</li>
<li>
    <div class="counter-item">
    <span class="counter-value text-secondary minutes">00</span>
    <span class="counter-text">Minutes</span>
    </div>
</li>
<li>
    <div class="counter-item">
    <span class="counter-value text-secondary seconds">00</span>
    <span class="counter-text">Seconds</span>
    </div>
</li>
</ul>