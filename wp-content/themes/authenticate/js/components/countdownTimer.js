import countdown from 'Plugins/countdown.min';

const CountdownTimer = () => {
  document.querySelectorAll('.counter-list').forEach((counterWrap) => {
    const targetDate = counterWrap.getAttribute('data-target');
    if (new Date().getTime() > new Date(targetDate).getTime()) return;
    const months = counterWrap.querySelector('.months');
    const days = counterWrap.querySelector('.days');
    const hours = counterWrap.querySelector('.hours');
    const minutes = counterWrap.querySelector('.minutes');
    const seconds = counterWrap.querySelector('.seconds');
    let timerId;
    function numberFormat(num) {
      return num < 10 ? `0${num}` : num;
    }
    function timerTick(ts) {
      months.innerHTML = numberFormat(ts.months);
      days.innerHTML = numberFormat(ts.days);
      hours.innerHTML = numberFormat(ts.hours);
      minutes.innerHTML = numberFormat(ts.minutes);
      seconds.innerHTML = numberFormat(ts.seconds);
      if (new Date(ts.start).getTime() < new Date(ts.end).getTime()) {
        window.clearInterval(timerId);
      }
    }
    timerId = countdown(new Date(targetDate), timerTick);
  });
};

export default CountdownTimer;
