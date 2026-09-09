document.addEventListener('DOMContentLoaded', () => {
  const dashboard = document.querySelector('.animated-dashboard');
  if (!dashboard || dashboard.dataset.counterStarted === 'true') return;

  dashboard.dataset.counterStarted = 'true';
  const counters = [...dashboard.querySelectorAll('.dashboard-counter')];
  const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  const formatValue = (element, value) => {
    if (element.closest('.metric-revenue')) return (Number(value) / 10).toFixed(1);
    return Math.round(Number(value)).toLocaleString('en-IN');
  };

  const finish = () => {
    counters.forEach((element) => {
      element.textContent = formatValue(element, element.dataset.count);
    });
  };

  if (reducedMotion) {
    finish();
    return;
  }

  const startedAt = performance.now();
  const duration = 1800;

  const update = (now) => {
    const progress = Math.min((now - startedAt) / duration, 1);
    const eased = 1 - Math.pow(1 - progress, 3);

    counters.forEach((element) => {
      element.textContent = formatValue(element, Number(element.dataset.count) * eased);
    });

    if (progress < 1) requestAnimationFrame(update);
    else finish();
  };

  requestAnimationFrame(update);
});

document.addEventListener('DOMContentLoaded', () => {
  const track = document.querySelector('.integration-highlight-track');
  const previous = document.querySelector('.integration-prev');
  const next = document.querySelector('.integration-next');
  if (!track || !previous || !next) return;

  const cardStep = () => {
    const card = track.querySelector('.integration-highlight');
    return card ? card.getBoundingClientRect().width + 16 : 320;
  };

  previous.addEventListener('click', () => {
    track.scrollBy({ left: -cardStep(), behavior: 'smooth' });
  });

  next.addEventListener('click', () => {
    const reachedEnd = track.scrollLeft + track.clientWidth >= track.scrollWidth - 8;
    track.scrollTo({ left: reachedEnd ? 0 : track.scrollLeft + cardStep(), behavior: 'smooth' });
  });
});
