<?php
// Dorobeat — demo landing page for a music streaming product.
$year = date('Y');
$tracks = [
    ['title' => 'Midnight Drive', 'artist' => 'Nova Lane', 'duration' => '3:42', 'tone' => 'violet'],
    ['title' => 'Golden Hour', 'artist' => 'The Coastline', 'duration' => '2:58', 'tone' => 'orange'],
    ['title' => 'Cloud Nine', 'artist' => 'Mira Sol', 'duration' => '3:16', 'tone' => 'blue'],
];
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#0b0b10">
<meta name="description" content="Dorobeat is a demo music discovery and listening experience.">
<title>Dorobeat — Find your next favourite</title>
<style>
:root{color-scheme:dark;--bg:#0b0b10;--panel:#15151d;--panel2:#1d1d28;--text:#f7f6fb;--muted:#aaa8b8;--accent:#b9f36b;--line:rgba(255,255,255,.1);font-family:Inter,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",sans-serif}
*{box-sizing:border-box}html{scroll-behavior:smooth}body{margin:0;background:var(--bg);color:var(--text);line-height:1.6}a{color:inherit;text-decoration:none}.wrap{width:min(1120px,calc(100% - 40px));margin:auto}
header{position:sticky;top:0;z-index:10;background:rgba(11,11,16,.84);backdrop-filter:blur(16px);border-bottom:1px solid var(--line)}nav{height:76px;display:flex;align-items:center;justify-content:space-between;gap:20px}.brand{display:flex;align-items:center;gap:10px;font-weight:850;font-size:1.2rem;letter-spacing:-.04em}.logo{width:38px;height:38px;border-radius:13px;display:grid;place-items:center;background:var(--accent);color:#15190f;font-size:1.25rem;font-weight:900}.brand em{font-style:normal;color:var(--accent)}.links{display:flex;align-items:center;gap:26px;color:var(--muted);font-size:.93rem}.links a:hover{color:var(--text)}.btn{display:inline-flex;align-items:center;justify-content:center;gap:9px;padding:12px 18px;border-radius:999px;background:var(--accent);color:#15190f;font-weight:800;border:1px solid transparent;cursor:pointer;transition:transform .2s}.btn:hover{transform:translateY(-2px)}.btn.ghost{background:transparent;color:var(--text);border-color:var(--line)}
.hero{padding:88px 0 75px;overflow:hidden}.hero-grid{display:grid;grid-template-columns:1.05fr .95fr;align-items:center;gap:40px}.eyebrow{font-size:.78rem;text-transform:uppercase;letter-spacing:.16em;color:var(--accent);font-weight:850}.eyebrow:before{content:"";display:inline-block;width:7px;height:7px;border-radius:50%;background:var(--accent);margin:0 10px 1px 0;box-shadow:0 0 15px var(--accent)}h1{font-size:clamp(3.2rem,7vw,6.2rem);line-height:.96;letter-spacing:-.075em;margin:20px 0;max-width:680px}h1 span{color:var(--accent)}.lead{font-size:1.08rem;color:var(--muted);max-width:510px}.actions{display:flex;gap:12px;flex-wrap:wrap;margin-top:28px}.note{color:var(--muted);font-size:.86rem;margin-top:22px}.art{min-height:420px;position:relative;display:grid;place-items:center}.disc{width:min(340px,70vw);aspect-ratio:1;border-radius:50%;position:relative;background:repeating-radial-gradient(circle at center,#171820 0 4px,#242631 5px 6px,#111219 7px 10px);box-shadow:0 0 85px rgba(185,243,107,.11),inset 0 0 28px #000}.disc:before{content:"";position:absolute;inset:26%;border-radius:50%;background:radial-gradient(circle at 35% 30%,#e2ffb2,#b9f36b 45%,#4c702a);box-shadow:0 0 30px rgba(185,243,107,.2)}.disc:after{content:"";position:absolute;width:17px;height:17px;border-radius:50%;background:#0b0b10;left:calc(50% - 8.5px);top:calc(50% - 8.5px);border:2px solid rgba(255,255,255,.35)}.float{position:absolute;padding:15px 18px;border:1px solid var(--line);border-radius:16px;background:rgba(24,24,33,.9);box-shadow:0 20px 45px #0006;backdrop-filter:blur(12px)}.float strong{display:block}.float small{color:var(--muted)}.f1{top:40px;right:0}.f2{bottom:38px;left:0}.bars{display:flex;gap:4px;align-items:center;height:23px;margin-top:8px}.bars i{width:4px;border-radius:4px;background:var(--accent);animation:pulse 1s ease-in-out infinite alternate}.bars i:nth-child(1){height:35%}.bars i:nth-child(2){height:80%;animation-delay:.2s}.bars i:nth-child(3){height:55%;animation-delay:.4s}.bars i:nth-child(4){height:100%;animation-delay:.1s}.bars i:nth-child(5){height:65%;animation-delay:.3s}@keyframes pulse{to{transform:scaleY(.55)}}
section{padding:72px 0}.head{display:flex;align-items:end;justify-content:space-between;gap:25px;margin-bottom:28px}.head h2,.about h2,.cta h2{font-size:clamp(2rem,4vw,3.25rem);line-height:1.08;letter-spacing:-.06em;margin:10px 0 0}.head p{max-width:420px;color:var(--muted);margin:0}.tracks{border:1px solid var(--line);border-radius:22px;overflow:hidden;background:var(--panel)}.track{display:grid;grid-template-columns:52px 1fr auto 42px;align-items:center;gap:16px;padding:16px 20px;border-bottom:1px solid var(--line)}.track:last-child{border-bottom:0}.cover{width:50px;height:50px;border-radius:13px;display:grid;place-items:center;font-size:1.3rem;background:linear-gradient(135deg,#6f4ad2,#eaa6ff)}.cover.orange{background:linear-gradient(135deg,#ff9a50,#5b241c)}.cover.blue{background:linear-gradient(135deg,#4aa7e8,#25336f)}.track strong{display:block}.track small,.duration{color:var(--muted);font-size:.9rem}.play{width:38px;height:38px;border-radius:50%;border:1px solid var(--line);background:var(--panel2);color:var(--text);cursor:pointer}.play:hover{color:var(--accent);border-color:var(--accent)}.status{font-size:.9rem;color:var(--accent);min-height:24px;margin-top:12px}.about-grid{display:grid;grid-template-columns:1fr 1fr;gap:18px}.about,.manifesto{border:1px solid var(--line);border-radius:22px;padding:30px;background:var(--panel)}.about p,.manifesto p{color:var(--muted)}.points{display:grid;gap:13px;margin-top:22px}.point{display:flex;gap:12px;align-items:center}.check{color:var(--accent);font-weight:900}.manifesto{background:linear-gradient(145deg,#202322,#131419);display:flex;flex-direction:column;justify-content:space-between;min-height:310px}.manifesto .big{font-size:clamp(2.3rem,5vw,4rem);font-weight:900;letter-spacing:-.07em;line-height:1.02}.manifesto .big span{color:var(--accent)}.tag{border:1px solid var(--line);border-radius:999px;padding:6px 11px;color:var(--muted);font-size:.8rem;width:max-content}.cta{border:1px solid var(--line);border-radius:24px;padding:36px;background:var(--panel);display:flex;justify-content:space-between;align-items:center;gap:24px}.cta p{color:var(--muted);margin-bottom:0}.cta h2{margin-top:0}footer{border-top:1px solid var(--line);padding:25px 0;color:var(--muted);font-size:.88rem}.foot{display:flex;justify-content:space-between;align-items:center;gap:18px}.foot-links{display:flex;gap:18px}
@media(max-width:800px){.hero-grid,.about-grid{grid-template-columns:1fr}.hero{padding-top:58px}.art{min-height:340px}.disc{width:270px}.head{align-items:start;flex-direction:column}.cta{align-items:start;flex-direction:column}.links{gap:14px}.links .hide{display:none}}
@media(max-width:520px){.wrap{width:calc(100% - 28px)}nav{height:66px}.links{font-size:.84rem;gap:12px}.hero{padding:48px 0 38px}section{padding:52px 0}.track{grid-template-columns:44px 1fr 36px;gap:12px;padding:13px}.cover{width:44px;height:44px}.duration{display:none}.f1{right:-2px;top:14px}.f2{left:-2px;bottom:14px}.foot{align-items:start;flex-direction:column}}
@media(prefers-reduced-motion:reduce){html{scroll-behavior:auto}*,*:before,*:after{animation:none!important;transition:none!important}}
</style>
</head>
<body>
<header><nav class="wrap" aria-label="Main navigation">
<a class="brand" href="#home"><span class="logo">♫</span><span>DORO<em>BEAT</em></span></a>
<div class="links"><a href="#discover">Discover</a><a href="#about">About</a><a href="#listen">Listen</a></div>
</nav></header>
<main>
<section class="hero" id="home"><div class="wrap hero-grid">
<div><div class="eyebrow">Your sound, your world</div><h1>Find your next <span>favourite.</span></h1>
<p class="lead">A music discovery concept for the songs that match your mood, move your day, and stay with you long after the beat ends.</p>
<div class="actions"><a class="btn" href="#discover">Explore the vibe ↗</a><a class="btn ghost" href="#about">Meet Dorobeat</a></div>
<p class="note">A concept landing page by Doroi · Music demo experience</p></div>
<div class="art" aria-label="Abstract vinyl record illustration"><div class="disc"></div>
<div class="float f1"><small>Now playing</small><strong>Midnight Drive</strong><small>Nova Lane</small><div class="bars" aria-hidden="true"><i></i><i></i><i></i><i></i><i></i></div></div>
<div class="float f2"><small>Your daily mix</small><strong>Made for your mood ✦</strong></div></div>
</div></section>
<section id="discover"><div class="wrap">
<div class="head"><div><div class="eyebrow">Discover</div><h2>Fresh sounds. New moods.</h2></div><p>Take a look at a few fictional tracks in this Dorobeat website demo.</p></div>
<div class="tracks">
<?php foreach ($tracks as $index => $track): ?>
<div class="track">
<div class="cover <?= htmlspecialchars($track['tone'], ENT_QUOTES, 'UTF-8') ?>" aria-hidden="true"><?= ['◒','☼','✧'][$index] ?></div>
<div><strong><?= htmlspecialchars($track['title'], ENT_QUOTES, 'UTF-8') ?></strong><small><?= htmlspecialchars($track['artist'], ENT_QUOTES, 'UTF-8') ?></small></div>
<span class="duration"><?= htmlspecialchars($track['duration'], ENT_QUOTES, 'UTF-8') ?></span>
<button class="play" type="button" aria-label="Preview <?= htmlspecialchars($track['title'], ENT_QUOTES, 'UTF-8') ?>" data-track="<?= htmlspecialchars($track['title'], ENT_QUOTES, 'UTF-8') ?>">▶</button>
</div>
<?php endforeach; ?>
</div><div class="status" id="player-status" role="status" aria-live="polite">Choose a track to preview the demo interaction.</div>
</div></section>
<section id="about"><div class="wrap about-grid">
<div class="about"><div class="eyebrow">About Dorobeat</div><h2>More than a playlist.</h2><p>Dorobeat is a demo concept for a simple, expressive music experience: easy to explore, pleasant to use, and focused on the feeling behind every track.</p>
<div class="points"><div class="point"><span class="check">✓</span><span>Clean, modern listening interface</span></div><div class="point"><span class="check">✓</span><span>Discover music by mood and moment</span></div><div class="point"><span class="check">✓</span><span>Designed to work on mobile and desktop</span></div></div></div>
<div class="manifesto"><span class="tag">THE DOROBEAT IDEA</span><div><div class="big">Press play.<br><span>Feel more.</span></div><p>Good music makes an ordinary moment feel different.</p></div><small style="color:var(--muted)">A music product concept from Doroi.</small></div>
</div></section>
<section id="listen"><div class="wrap cta"><div><div class="eyebrow">Keep the rhythm</div><h2>Make room for good music.</h2><p>This is a front-end demo. Audio streaming and user accounts are not connected.</p></div><a class="btn" href="#discover">Explore tracks ↑</a></div></section>
</main>
<footer><div class="wrap foot"><a class="brand" href="#home"><span class="logo">♫</span><span>DORO<em>BEAT</em></span></a><span>© <?= $year ?> Dorobeat · Demo project</span><div class="foot-links"><a href="#discover">Discover</a><a href="#about">About</a></div></div></footer>
<script>
document.querySelectorAll('[data-track]').forEach(function(button){
  button.addEventListener('click', function(){
    var title = button.getAttribute('data-track');
    document.getElementById('player-status').textContent = 'Selected: ' + title + ' — audio playback is not connected in this demo.';
    document.querySelectorAll('[data-track]').forEach(function(other){ other.textContent = '▶'; });
    button.textContent = '✓';
  });
});
</script>
</body>
</html>