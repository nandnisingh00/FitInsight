<style>
*{box-sizing:border-box;margin:0;padding:0}
#fi-root{background:#0a0f1e;min-height:600px;font-family:system-ui,sans-serif;color:#e2e8f0;padding-bottom:2rem}
.fi-header{background:#0d1526;border-bottom:1px solid rgba(59,130,246,.15);padding:1.1rem 1.5rem 0}
.fi-logo{font-size:17px;font-weight:500;color:linear-gradient(to right, #a18cd1, #fbc2eb);;margin-bottom:1rem;display:flex;align-items:center;gap:8px}
.fi-logo-dot{width:8px;height:8px;border-radius:50%;background:#3b82f6;display:inline-block}
.fi-tabs{display:flex;gap:0}
.fi-tab{padding:8px 16px;font-size:13px;color:#64748b;border-bottom:2px solid transparent;cursor:pointer;background:none;border-top:none;border-left:none;border-right:none;transition:all .2s;white-space:nowrap;font-family:inherit}
.fi-tab.active{color:#60a5fa;border-bottom-color:#3b82f6}
.fi-tab:hover:not(.active){color:#94a3b8}
.fi-body{padding:1.25rem 1.5rem 0}
.fi-metrics{display:grid;grid-template-columns:repeat(auto-fit,minmax(120px,1fr));gap:10px;margin-bottom:1.25rem}
.fi-metric{background:#111827;border:1px solid rgba(59,130,246,.15);border-radius:10px;padding:12px 14px}
.fi-metric-label{font-size:11px;color:#94a3b8;text-transform:uppercase;letter-spacing:.6px;margin-bottom:4px}
.fi-metric-value{font-size:21px;font-weight:500;color:#e2e8f0;line-height:1.2}
.fi-metric-sub{font-size:11px;color:#64748b;margin-top:2px}
.fi-grid{display:grid;grid-template-columns:1fr 1fr;gap:12px;margin-bottom:12px}
@media(max-width:560px){.fi-grid{grid-template-columns:1fr}}
.fi-card{background:#111827;border:1px solid rgba(59,130,246,.15);border-radius:12px;padding:16px 18px}
.fi-card-title{font-size:12px;font-weight:500;color:#94a3b8;text-transform:uppercase;letter-spacing:.7px;margin-bottom:14px;display:flex;align-items:center;gap:7px}
.fi-card-title-dot{width:6px;height:6px;border-radius:50%;background:#3b82f6;flex-shrink:0}
.fi-form{display:flex;flex-direction:column;gap:10px}
.fi-row{display:grid;grid-template-columns:1fr 1fr;gap:10px}
.fi-field{display:flex;flex-direction:column;gap:5px}
.fi-field label{font-size:11px;color:#94a3b8;letter-spacing:.4px}
.fi-field input,.fi-field select{background:#0a1628;border:1px solid rgba(59,130,246,.28);border-radius:7px;padding:8px 11px;font-size:13px;color:#e2e8f0;outline:none;transition:border .2s;font-family:inherit;width:100%}
.fi-field input:focus,.fi-field select:focus{border-color:#3b82f6;box-shadow:0 0 0 3px rgba(59,130,246,.12)}
.fi-field input::placeholder{color:#64748b}
.fi-field select option{background:#0d1526}
.fi-optional{font-size:10px;color:#475569;font-style:italic;margin-left:4px}
.fi-btn{background:#3b82f6;color:#fff;border:none;border-radius:8px;padding:10px;font-size:13px;font-weight:500;cursor:pointer;margin-top:4px;transition:background .2s,transform .1s;width:100%;font-family:inherit}
.fi-btn:hover{background:#2563eb}
.fi-btn:active{transform:scale(.98)}
.bmi-gauge-wrap{display:flex;flex-direction:column;align-items:center;gap:4px}
.bmi-val{font-size:28px;font-weight:500;text-align:center}
.bmi-cat{font-size:12px;color:#94a3b8;text-align:center}
.bmi-scale{display:flex;width:100%;gap:3px;margin-top:10px}
.bmi-seg-label{font-size:9px;color:#64748b;text-align:center;margin-top:3px}
.fi-risk-list{display:flex;flex-direction:column;gap:8px}
.fi-risk-row{display:flex;align-items:center;gap:10px}
.fi-risk-dot{width:7px;height:7px;border-radius:50%;flex-shrink:0}
.fi-risk-name{font-size:12px;color:#94a3b8;width:88px;flex-shrink:0}
.fi-risk-bar-bg{flex:1;height:6px;background:rgba(255,255,255,.06);border-radius:3px;overflow:hidden}
.fi-risk-bar{height:100%;border-radius:3px;transition:width 1s ease;width:0%}
.fi-risk-pct{font-size:11px;width:44px;text-align:right;flex-shrink:0}
.score-wrap{display:flex;align-items:center;gap:16px}
.score-ring-area{position:relative;width:80px;height:80px;flex-shrink:0}
.score-text{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);text-align:center}
.score-num{font-size:20px;font-weight:500}
.score-out{font-size:9px;color:#64748b}
.score-details{display:flex;flex-direction:column;gap:6px;flex:1}
.score-bar-row{display:flex;align-items:center;gap:8px}
.score-bar-label{font-size:11px;color:#94a3b8;width:60px;flex-shrink:0}
.score-bar-bg{flex:1;height:5px;background:rgba(255,255,255,.06);border-radius:3px;overflow:hidden}
.score-bar-fill{height:100%;border-radius:3px;transition:width 1s ease}
.score-bar-val{font-size:11px;color:#64748b;width:26px;text-align:right}
.fi-recs{display:flex;flex-direction:column;gap:8px}
.fi-rec{display:flex;align-items:flex-start;gap:10px;background:rgba(59,130,246,.05);border:1px solid rgba(59,130,246,.12);border-radius:9px;padding:10px 12px}
.fi-rec-icon{width:28px;height:28px;border-radius:7px;display:flex;align-items:center;justify-content:center;font-size:13px;flex-shrink:0;margin-top:1px}
.fi-rec-body{flex:1}
.fi-rec-title{font-size:13px;font-weight:500;color:#e2e8f0;margin-bottom:2px}
.fi-rec-desc{font-size:11px;color:#94a3b8;line-height:1.5}
.fi-rec-badge{font-size:10px;padding:2px 8px;border-radius:4px;font-weight:500;flex-shrink:0;align-self:flex-start;margin-top:2px}
.fi-empty{text-align:center;padding:2rem 1rem;color:#64748b;font-size:13px}
.fi-empty-icon{font-size:26px;margin-bottom:6px;opacity:.4}
.fi-finding{display:flex;align-items:flex-start;gap:8px;padding:10px 12px;border-radius:8px}
.fi-finding-dot{width:6px;height:6px;border-radius:50%;margin-top:4px;flex-shrink:0}
.tab-content{display:none}
.tab-content.visible{display:block}
.fi-error{color:#f87171;font-size:12px;margin-top:6px;display:none}
</style>

<div id="fi-root">
  <div class="fi-header">
    <div class="fi-logo"><span class="fi-logo-dot"></span>FitInsight</div>
    <div class="fi-tabs" id="fi-tabs">
      <button class="fi-tab active" data-tab="overview">Health Overview</button>
      <button class="fi-tab" data-tab="risk">Risk Analysis</button>
      <button class="fi-tab" data-tab="recs">Recommendations</button>
    </div>
  </div>

  <div class="fi-body">

    <!-- OVERVIEW -->
    <div id="tab-overview" class="tab-content visible">
      <div id="metrics-strip" class="fi-metrics" style="display:none">
        <div class="fi-metric"><div class="fi-metric-label">BMI</div><div class="fi-metric-value" id="m-bmi">—</div><div class="fi-metric-sub" id="m-bmi-cat">—</div></div>
        <div class="fi-metric"><div class="fi-metric-label">Health Score</div><div class="fi-metric-value" id="m-score">—</div><div class="fi-metric-sub" id="m-score-cat">—</div></div>
        <div class="fi-metric"><div class="fi-metric-label">Blood Sugar</div><div class="fi-metric-value" id="m-sugar">—</div><div class="fi-metric-sub" id="m-sugar-cat">—</div></div>
        <div class="fi-metric"><div class="fi-metric-label">Cholesterol</div><div class="fi-metric-value" id="m-chol">—</div><div class="fi-metric-sub" id="m-chol-cat">—</div></div>
        <div class="fi-metric"><div class="fi-metric-label">Blood Pressure</div><div class="fi-metric-value" id="m-bp">—</div><div class="fi-metric-sub" id="m-bp-cat">—</div></div>
      </div>

      <div class="fi-grid">
        <div class="fi-card">
          <div class="fi-card-title"><span class="fi-card-title-dot"></span>Enter health details</div>
          <div class="fi-form">
            <div class="fi-row">
              <div class="fi-field">
                <label>Age <span style="color:#ef4444">*</span></label>
                <input type="number" id="in-age" placeholder="e.g. 28" min="1" max="120">
              </div>
              <div class="fi-field">
                <label>Gender <span style="color:#ef4444">*</span></label>
                <select id="in-gender">
                  <option value="">Select</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="other">Other</option>
                </select>
              </div>
            </div>
            <div class="fi-row">
              <div class="fi-field">
                <label>Height (cm) <span style="color:#ef4444">*</span></label>
                <input type="number" id="in-height" placeholder="e.g. 175" min="50" max="250">
              </div>
              <div class="fi-field">
                <label>Weight (kg) <span style="color:#ef4444">*</span></label>
                <input type="number" id="in-weight" placeholder="e.g. 72" min="20" max="300">
              </div>
            </div>
            <div class="fi-row">
              <div class="fi-field">
                <label>Blood Sugar (mg/dL) <span class="fi-optional">optional</span></label>
                <input type="number" id="in-sugar" placeholder="e.g. 95" min="50" max="500">
              </div>
              <div class="fi-field">
                <label>Cholesterol (mg/dL) <span class="fi-optional">optional</span></label>
                <input type="number" id="in-chol" placeholder="e.g. 190" min="50" max="600">
              </div>
            </div>
            <div class="fi-row">
              <div class="fi-field">
                <label>Systolic BP (mmHg) <span class="fi-optional">optional</span></label>
                <input type="number" id="in-sys" placeholder="e.g. 120" min="60" max="250">
              </div>
              <div class="fi-field">
                <label>Diastolic BP (mmHg) <span class="fi-optional">optional</span></label>
                <input type="number" id="in-dia" placeholder="e.g. 80" min="40" max="150">
              </div>
            </div>
            <div class="fi-field">
              <label>Activity Level <span class="fi-optional">optional</span></label>
              <select id="in-activity">
                <option value="">Select</option>
                <option value="1">Sedentary</option>
                <option value="2">Lightly active</option>
                <option value="3">Moderately active</option>
                <option value="4">Very active</option>
              </select>
            </div>
            <div id="fi-error" class="fi-error">Please fill in all required fields (Age, Gender, Height, Weight).</div>
            <button class="fi-btn" id="calc-btn">Calculate health metrics</button>
          </div>
        </div>

        <div class="fi-card">
          <div class="fi-card-title"><span class="fi-card-title-dot"></span>BMI analysis</div>
          <div id="bmi-empty" class="fi-empty"><div class="fi-empty-icon">⊙</div>Enter details to see your BMI</div>
          <div id="bmi-result" style="display:none">
            <div class="bmi-gauge-wrap">
              <svg width="160" height="88" viewBox="0 0 160 88">
                <path d="M15,83 A65,65 0 0,1 55,23" stroke="#1e3a5f" stroke-width="10" fill="none" stroke-linecap="round"/>
                <path d="M55,23 A65,65 0 0,1 105,23" stroke="#1e4a2f" stroke-width="10" fill="none" stroke-linecap="round"/>
                <path d="M105,23 A65,65 0 0,1 145,83" stroke="#4a3010" stroke-width="10" fill="none" stroke-linecap="round"/>
                <path d="M15,83 A65,65 0 0,1 55,23" id="arc-uw" stroke="#3b82f6" stroke-width="10" fill="none" stroke-linecap="round" opacity="0"/>
                <path d="M55,23 A65,65 0 0,1 105,23" id="arc-nm" stroke="#10b981" stroke-width="10" fill="none" stroke-linecap="round" opacity="0"/>
                <path d="M105,23 A65,65 0 0,1 145,83" id="arc-ov" stroke="#f59e0b" stroke-width="10" fill="none" stroke-linecap="round" opacity="0"/>
                <line id="bmi-needle" x1="80" y1="78" x2="80" y2="28" stroke="#e2e8f0" stroke-width="2" stroke-linecap="round" transform="rotate(0,80,78)" opacity="0"/>
                <circle cx="80" cy="78" r="4" fill="#e2e8f0"/>
                <text x="12" y="98" font-size="9" fill="#64748b">Under</text>
                <text x="80" y="14" font-size="9" fill="#64748b" text-anchor="middle">Normal</text>
                <text x="148" y="98" font-size="9" fill="#64748b" text-anchor="end">Over</text>
              </svg>
              <div class="bmi-val" id="bmi-val">—</div>
              <div class="bmi-cat" id="bmi-cat">—</div>
              <div class="bmi-scale" style="margin-top:10px">
                <div style="flex:1"><div style="height:6px;background:#3b82f6;border-radius:3px 0 0 3px"></div><div class="bmi-seg-label">&lt;18.5</div></div>
                <div style="flex:1.5"><div style="height:6px;background:#10b981"></div><div class="bmi-seg-label">18.5–24.9</div></div>
                <div style="flex:1.5"><div style="height:6px;background:#f59e0b"></div><div class="bmi-seg-label">25–29.9</div></div>
                <div style="flex:1"><div style="height:6px;background:#ef4444;border-radius:0 3px 3px 0"></div><div class="bmi-seg-label">30+</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="fi-grid">
        <div class="fi-card">
          <div class="fi-card-title"><span class="fi-card-title-dot"></span>Health score</div>
          <div id="score-empty" class="fi-empty" style="padding:1rem 0"><div class="fi-empty-icon">◎</div>Awaiting data</div>
          <div id="score-result" style="display:none">
            <div class="score-wrap">
              <div class="score-ring-area">
                <svg width="80" height="80" viewBox="0 0 80 80">
                  <circle cx="40" cy="40" r="32" fill="none" stroke="rgba(255,255,255,.05)" stroke-width="8"/>
                  <circle cx="40" cy="40" r="32" fill="none" id="score-ring-fill" stroke="#3b82f6" stroke-width="8"
                    stroke-dasharray="201" stroke-dashoffset="201" stroke-linecap="round"
                    transform="rotate(-90,40,40)" style="transition:stroke-dashoffset 1s ease"/>
                </svg>
                <div class="score-text">
                  <div class="score-num" id="score-num" style="color:#3b82f6">—</div>
                  <div class="score-out">/ 100</div>
                </div>
              </div>
              <div class="score-details" id="score-breakdown"></div>
            </div>
          </div>
        </div>

        <div class="fi-card">
          <div class="fi-card-title"><span class="fi-card-title-dot"></span>Vitals summary</div>
          <div id="vitals-empty" class="fi-empty" style="padding:1rem 0"><div class="fi-empty-icon">♡</div>Awaiting data</div>
          <div id="vitals-result" class="fi-risk-list" style="display:none"></div>
        </div>
      </div>
    </div>

    <!-- RISK -->
    <div id="tab-risk" class="tab-content">
      <div id="risk-empty" class="fi-empty" style="padding:3rem 1rem"><div class="fi-empty-icon">⚠</div>Complete the health form first</div>
      <div id="risk-result" style="display:none">
        <div class="fi-grid">
          <div class="fi-card">
            <div class="fi-card-title"><span class="fi-card-title-dot"></span>Risk factors</div>
            <div class="fi-risk-list" id="risk-bars"></div>
          </div>
          <div class="fi-card">
            <div class="fi-card-title"><span class="fi-card-title-dot"></span>Overall risk profile</div>
            <div id="risk-profile-content"></div>
          </div>
        </div>
        <div class="fi-card" style="margin-top:12px">
          <div class="fi-card-title"><span class="fi-card-title-dot"></span>Key findings</div>
          <div id="risk-findings" style="display:flex;flex-direction:column;gap:8px"></div>
        </div>
      </div>
    </div>

    <!-- RECS -->
    <div id="tab-recs" class="tab-content">
      <div id="recs-empty" class="fi-empty" style="padding:3rem 1rem"><div class="fi-empty-icon">✦</div>Complete the health form to get personalised recommendations</div>
      <div id="recs-result" style="display:none">
        <div class="fi-card">
          <div class="fi-card-title"><span class="fi-card-title-dot"></span>Personalised recommendations</div>
          <div class="fi-recs" id="recs-list"></div>
        </div>
      </div>
    </div>

  </div>
</div>

<script>
(function(){
  var S = {};

  function qs(id){ return document.getElementById(id); }

  // Tab switching
  document.getElementById('fi-tabs').addEventListener('click', function(e){
    var btn = e.target.closest('.fi-tab');
    if(!btn) return;
    var tab = btn.dataset.tab;
    document.querySelectorAll('.fi-tab').forEach(function(t){ t.classList.remove('active'); });
    btn.classList.add('active');
    document.querySelectorAll('.tab-content').forEach(function(t){ t.classList.remove('visible'); });
    qs('tab-'+tab).classList.add('visible');
  });

  // Calculate button
  qs('calc-btn').addEventListener('click', function(){
    var age = parseFloat(qs('in-age').value);
    var gender = qs('in-gender').value;
    var height = parseFloat(qs('in-height').value);
    var weight = parseFloat(qs('in-weight').value);

    if(!age || !gender || !height || !weight){
      qs('fi-error').style.display = 'block';
      return;
    }
    qs('fi-error').style.display = 'none';

    var sugar = parseFloat(qs('in-sugar').value) || 0;
    var chol = parseFloat(qs('in-chol').value) || 0;
    var sys = parseFloat(qs('in-sys').value) || 0;
    var dia = parseFloat(qs('in-dia').value) || 0;
    var activity = parseInt(qs('in-activity').value) || 2;

    var bmi = weight / Math.pow(height/100, 2);
    var bmiCat = bmi < 18.5 ? 'Underweight' : bmi < 25 ? 'Normal weight' : bmi < 30 ? 'Overweight' : 'Obese';
    var bmiColor = bmi < 18.5 ? '#3b82f6' : bmi < 25 ? '#10b981' : bmi < 30 ? '#f59e0b' : '#ef4444';

    var sugarCat = !sugar ? 'Not provided' : sugar < 100 ? 'Normal' : sugar < 126 ? 'Pre-diabetic' : 'High';
    var sugarColor = !sugar ? '#64748b' : sugar < 100 ? '#10b981' : sugar < 126 ? '#f59e0b' : '#ef4444';
    var cholCat = !chol ? 'Not provided' : chol < 200 ? 'Desirable' : chol < 240 ? 'Borderline' : 'High';
    var cholColor = !chol ? '#64748b' : chol < 200 ? '#10b981' : chol < 240 ? '#f59e0b' : '#ef4444';
    var bpCat = !sys ? 'Not provided' : sys < 120 && dia < 80 ? 'Normal' : sys < 130 ? 'Elevated' : sys < 140 ? 'Stage 1 HT' : 'Stage 2 HT';
    var bpColor = !sys ? '#64748b' : sys < 120 ? '#10b981' : sys < 130 ? '#3b82f6' : sys < 140 ? '#f59e0b' : '#ef4444';

    var score = 100;
    if(bmi < 18.5 || bmi >= 30) score -= 20; else if(bmi >= 25) score -= 10;
    if(sugar){ if(sugar >= 126) score -= 20; else if(sugar >= 100) score -= 10; }
    if(chol){ if(chol >= 240) score -= 15; else if(chol >= 200) score -= 7; }
    if(sys){ if(sys >= 140) score -= 20; else if(sys >= 130) score -= 10; else if(sys >= 120) score -= 5; }
    if(age > 60) score -= 10; else if(age > 45) score -= 5;
    if(activity >= 3) score += 5; else if(activity === 1) score -= 10;
    score = Math.min(100, Math.max(0, Math.round(score)));

    var scoreCat = score >= 80 ? 'Excellent' : score >= 60 ? 'Good' : score >= 40 ? 'Fair' : 'Needs attention';
    var scoreColor = score >= 80 ? '#10b981' : score >= 60 ? '#3b82f6' : score >= 40 ? '#f59e0b' : '#ef4444';

    S = { bmi, bmiCat, bmiColor, sugar, sugarCat, sugarColor, chol, cholCat, cholColor, sys, dia, bpCat, bpColor, score, scoreCat, scoreColor, age, activity, height, weight, gender };

fetch("save_health.php", {
    method: "POST",
    headers: {
        "Content-Type": "application/x-www-form-urlencoded"
    },
    body: `age=${age}&gender=${gender}&height=${height}&weight=${weight}&bmi=${bmi}
    &sugar=${sugar}&chol=${chol}&sys=${sys}&dia=${dia}&activity=${activity}&score=${score}`
})
.then(res => res.json())
.then(data => {
    if(data.status === "success"){
        console.log("Saved successfully");
    } else {
        console.log("Error:", data.message);
    }
});

    renderOverview();
    renderRisk();
    renderRecs();

    qs('metrics-strip').style.display = 'grid';
  });

  function renderOverview(){
    // metrics strip
    function setM(id, val, color, sub){
      qs('m-'+id).textContent = val;
      qs('m-'+id).style.color = color;
      qs('m-'+id+'-cat').textContent = sub;
    }
    setM('bmi', S.bmi.toFixed(1), S.bmiColor, S.bmiCat);
    setM('score', S.score+'/100', S.scoreColor, S.scoreCat);
    setM('sugar', S.sugar ? S.sugar+' mg/dL' : '—', S.sugarColor, S.sugarCat);
    setM('chol', S.chol ? S.chol+' mg/dL' : '—', S.cholColor, S.cholCat);
    setM('bp', S.sys ? S.sys+'/'+S.dia : '—', S.bpColor, S.bpCat);

    // BMI gauge
    qs('bmi-empty').style.display = 'none';
    qs('bmi-result').style.display = 'block';
    qs('bmi-val').textContent = S.bmi.toFixed(1);
    qs('bmi-val').style.color = S.bmiColor;
    qs('bmi-cat').textContent = S.bmiCat;
    var angle = Math.min(90, Math.max(-90, ((S.bmi - 15) / 20) * 180 - 90));
    qs('bmi-needle').setAttribute('transform','rotate('+angle+',80,78)');
    qs('bmi-needle').style.opacity = '1';
    qs('arc-uw').style.opacity = S.bmi < 18.5 ? '1' : '0';
    qs('arc-nm').style.opacity = (S.bmi >= 18.5 && S.bmi < 25) ? '1' : '0';
    qs('arc-ov').style.opacity = (S.bmi >= 25 && S.bmi < 30) ? '1' : '0';

    // Score ring
    qs('score-empty').style.display = 'none';
    qs('score-result').style.display = 'block';
    qs('score-num').textContent = S.score;
    qs('score-num').style.color = S.scoreColor;
    qs('score-ring-fill').style.stroke = S.scoreColor;
    qs('score-ring-fill').style.strokeDashoffset = (201 - (S.score/100)*201).toFixed(1);

    var bmiPct = S.bmi < 25 ? (S.bmi >= 18.5 ? 100 : 60) : S.bmi < 30 ? 72 : 40;
    var sugarPct = !S.sugar ? 50 : S.sugar < 100 ? 100 : S.sugar < 126 ? 60 : 30;
    var bpPct = !S.sys ? 50 : S.sys < 120 ? 100 : S.sys < 130 ? 70 : S.sys < 140 ? 45 : 20;
    var actPct = S.activity * 25;
    var breakdown = [
      {label:'BMI', val:bmiPct, color:S.bmiColor},
      {label:'Blood sugar', val:sugarPct, color:S.sugarColor},
      {label:'BP', val:bpPct, color:S.bpColor},
      {label:'Activity', val:actPct, color:'#06b6d4'}
    ];
    qs('score-breakdown').innerHTML = breakdown.map(function(b){
      return '<div class="score-bar-row"><div class="score-bar-label">'+b.label+'</div><div class="score-bar-bg"><div class="score-bar-fill" style="width:'+b.val+'%;background:'+b.color+'"></div></div><div class="score-bar-val">'+b.val+'%</div></div>';
    }).join('');

    // Vitals
    qs('vitals-empty').style.display = 'none';
    qs('vitals-result').style.display = 'flex';
    var vitals = [
      {label:'BMI', val:S.bmi.toFixed(1), color:S.bmiColor, pct:Math.min(100,Math.round(S.bmi/40*100))},
      {label:'Blood sugar', val:S.sugar ? S.sugar+' mg/dL' : 'N/A', color:S.sugarColor, pct:S.sugar ? Math.min(100,Math.round(S.sugar/400*100)):20},
      {label:'Cholesterol', val:S.chol ? S.chol+' mg/dL' : 'N/A', color:S.cholColor, pct:S.chol ? Math.min(100,Math.round(S.chol/400*100)):20},
      {label:'Blood pressure', val:S.sys ? S.sys+'/'+S.dia+' mmHg' : 'N/A', color:S.bpColor, pct:S.sys ? Math.min(100,Math.round(S.sys/200*100)):20}
    ];
    qs('vitals-result').innerHTML = vitals.map(function(v){
      return '<div class="fi-risk-row"><div class="fi-risk-dot" style="background:'+v.color+'"></div><div class="fi-risk-name">'+v.label+'</div><div class="fi-risk-bar-bg"><div class="fi-risk-bar" style="width:'+v.pct+'%;background:'+v.color+'"></div></div><div class="fi-risk-pct" style="color:'+v.color+'">'+v.val+'</div></div>';
    }).join('');
  }

  function calcRisk(type){
    var risk = 10;
    if(type === 'cardio'){
      if(S.chol >= 240) risk+=30; else if(S.chol >= 200) risk+=15;
      if(S.sys >= 140) risk+=25; else if(S.sys >= 130) risk+=12;
      if(S.bmi >= 30) risk+=15; else if(S.bmi >= 25) risk+=8;
      if(S.age > 50) risk+=15; else if(S.age > 40) risk+=8;
      if(S.activity <= 1) risk+=10;
    } else if(type === 'diabetes'){
      if(S.sugar >= 126) risk+=40; else if(S.sugar >= 100) risk+=20;
      if(S.bmi >= 30) risk+=15; else if(S.bmi >= 25) risk+=8;
      if(S.age > 45) risk+=10;
      if(S.activity <= 1) risk+=8;
    } else if(type === 'hypertension'){
      if(S.sys >= 140) risk+=45; else if(S.sys >= 130) risk+=25; else if(S.sys >= 120) risk+=10;
      if(S.bmi >= 30) risk+=15;
      if(S.age > 50) risk+=12;
    } else if(type === 'obesity'){
      if(S.bmi >= 30) risk+=50; else if(S.bmi >= 25) risk+=20; else if(S.bmi < 18.5) risk+=10;
      if(S.activity <= 1) risk+=15;
    } else if(type === 'metabolic'){
      if(S.sugar >= 100) risk+=15;
      if(S.chol >= 200) risk+=15;
      if(S.bmi >= 30) risk+=20; else if(S.bmi >= 25) risk+=10;
      if(S.sys >= 130) risk+=10;
      if(S.activity <= 1) risk+=10;
    }
    return Math.min(95, risk);
  }

  function renderRisk(){
    qs('risk-empty').style.display = 'none';
    qs('risk-result').style.display = 'block';

    var riskTypes = ['cardio','diabetes','hypertension','obesity','metabolic'];
    var riskLabels = ['Cardiovascular','Diabetes','Hypertension','Obesity','Metabolic'];
    var risks = riskTypes.map(function(t,i){
      var pct = calcRisk(t);
      var color = pct < 25 ? '#10b981' : pct < 50 ? '#3b82f6' : pct < 70 ? '#f59e0b' : '#ef4444';
      return {label:riskLabels[i], pct:pct, color:color};
    });

    qs('risk-bars').innerHTML = risks.map(function(r){
      return '<div class="fi-risk-row"><div class="fi-risk-dot" style="background:'+r.color+'"></div><div class="fi-risk-name">'+r.label+'</div><div class="fi-risk-bar-bg"><div class="fi-risk-bar" style="background:'+r.color+'" data-w="'+r.pct+'"></div></div><div class="fi-risk-pct" style="color:'+r.color+'">'+r.pct+'%</div></div>';
    }).join('');

    setTimeout(function(){
      document.querySelectorAll('.fi-risk-bar[data-w]').forEach(function(bar){
        bar.style.width = bar.getAttribute('data-w')+'%';
      });
    }, 80);

    var overall = Math.round(risks.reduce(function(a,r){ return a+r.pct; },0)/risks.length);
    var oc = overall < 25 ? '#10b981' : overall < 50 ? '#3b82f6' : overall < 70 ? '#f59e0b' : '#ef4444';
    var ol = overall < 25 ? 'Low risk' : overall < 50 ? 'Moderate risk' : overall < 70 ? 'Elevated risk' : 'High risk';

    qs('risk-profile-content').innerHTML = '<div style="text-align:center;padding:1rem 0"><div style="font-size:40px;font-weight:500;color:'+oc+'">'+overall+'%</div><div style="font-size:12px;color:#94a3b8;margin-top:4px">Overall Risk Score</div><div style="margin-top:12px;display:inline-block;padding:4px 14px;border-radius:20px;background:'+oc+'22;color:'+oc+';font-size:12px;font-weight:500">'+ol+'</div></div><div style="font-size:11px;color:#475569;text-align:center;margin-top:8px;line-height:1.5">Indicative estimates only. Consult a medical professional for clinical assessment.</div>';

    var findings = [];
    if(S.bmi >= 30) findings.push({text:'BMI indicates obesity — a significant health risk factor.',color:'#ef4444'});
    else if(S.bmi >= 25) findings.push({text:'BMI is in the overweight range — consider weight management.',color:'#f59e0b'});
    if(S.sugar >= 126) findings.push({text:'Blood sugar is in the diabetic range — consult your doctor.',color:'#ef4444'});
    else if(S.sugar >= 100) findings.push({text:'Blood sugar is elevated — consider dietary changes.',color:'#f59e0b'});
    if(S.chol >= 240) findings.push({text:'Cholesterol is high — cardiovascular risk is elevated.',color:'#ef4444'});
    else if(S.chol >= 200) findings.push({text:'Cholesterol is borderline — monitor closely.',color:'#f59e0b'});
    if(S.sys >= 140) findings.push({text:'Blood pressure indicates Stage 2 hypertension.',color:'#ef4444'});
    else if(S.sys >= 130) findings.push({text:'Blood pressure is at Stage 1 hypertension level.',color:'#f59e0b'});
    if(findings.length === 0) findings.push({text:'All vitals are within healthy ranges — keep it up!',color:'#10b981'});

    qs('risk-findings').innerHTML = findings.map(function(f){
      return '<div class="fi-finding" style="background:'+f.color+'11;border:1px solid '+f.color+'33"><div class="fi-finding-dot" style="background:'+f.color+'"></div><span style="font-size:12px;color:#94a3b8">'+f.text+'</span></div>';
    }).join('');
  }


  function renderRecs(){
    qs('recs-empty').style.display = 'none';
    qs('recs-result').style.display = 'block';

    var recs = [];
    if(S.bmi >= 25) recs.push({icon:'⚖',bg:'#f59e0b22',ic:'#f59e0b',title:S.bmi>=30?'Weight management priority':'Gradual weight reduction',desc:'Aim to reduce body weight by 5–10% over 3 months through a calorie-controlled diet and consistent exercise.',badge:'High priority',bc:'#f59e0b22',bt:'#f59e0b'});
    else if(S.bmi < 18.5) recs.push({icon:'🥗',bg:'#3b82f622',ic:'#3b82f6',title:'Increase caloric intake',desc:'Work with a nutritionist to gain weight healthily through nutrient-dense foods and resistance training.',badge:'Moderate',bc:'#3b82f622',bt:'#3b82f6'});
    if(S.sugar >= 100) recs.push({icon:'🍬',bg:'#ef444422',ic:'#ef4444',title:'Blood sugar management',desc:S.sugar>=126?'Consult your doctor promptly. Reduce refined carbs, increase fibre intake, and monitor blood glucose daily.':'Reduce sugar and refined carbohydrate intake. Discuss a glucose monitoring plan with your GP.',badge:S.sugar>=126?'Urgent':'Important',bc:S.sugar>=126?'#ef444422':'#f59e0b22',bt:S.sugar>=126?'#ef4444':'#f59e0b'});
    if(S.chol >= 200) recs.push({icon:'❤',bg:'#ef444422',ic:'#ef4444',title:'Cholesterol reduction',desc:'Increase omega-3 rich foods, reduce saturated fats, and do 30 minutes of moderate cardio 5 days per week.',badge:S.chol>=240?'High priority':'Moderate',bc:S.chol>=240?'#ef444422':'#f59e0b22',bt:S.chol>=240?'#ef4444':'#f59e0b'});
    if(S.sys >= 120) recs.push({icon:'💓',bg:'#f59e0b22',ic:'#f59e0b',title:'Blood pressure control',desc:S.sys>=140?'Seek medical advice promptly. Reduce sodium, limit alcohol, and follow a DASH diet.':'Keep sodium under 2.3g/day, practice stress management, and monitor readings weekly.',badge:S.sys>=140?'Urgent':'Important',bc:S.sys>=140?'#ef444422':'#f59e0b22',bt:S.sys>=140?'#ef4444':'#f59e0b'});
    if(S.activity <= 1) recs.push({icon:'🏃',bg:'#10b98122',ic:'#10b981',title:'Increase physical activity',desc:'Aim for 150 minutes of moderate aerobic exercise per week. Start with 20-minute daily walks.',badge:'Recommended',bc:'#10b98122',bt:'#10b981'});
    else if(S.activity >= 3) recs.push({icon:'✦',bg:'#10b98122',ic:'#10b981',title:'Maintain your activity level',desc:'Your activity level is excellent. Ensure adequate recovery, hydration, and balanced nutrition to sustain it.',badge:'On track',bc:'#10b98122',bt:'#10b981'});
    recs.push({icon:'💧',bg:'#06b6d422',ic:'#06b6d4',title:'Stay well hydrated',desc:'Drink 2–3 litres of water daily to support metabolism, blood pressure regulation, and cognitive function.',badge:'General',bc:'#06b6d422',bt:'#06b6d4'});
    recs.push({icon:'😴',bg:'#8b5cf622',ic:'#8b5cf6',title:'Prioritise sleep quality',desc:'Aim for 7–9 hours per night. Poor sleep is linked to weight gain, elevated blood sugar, and hypertension.',badge:'General',bc:'#8b5cf622',bt:'#8b5cf6'});

    qs('recs-list').innerHTML = recs.map(function(r){
      return '<div class="fi-rec"><div class="fi-rec-icon" style="background:'+r.bg+';color:'+r.ic+'">'+r.icon+'</div><div class="fi-rec-body"><div class="fi-rec-title">'+r.title+'</div><div class="fi-rec-desc">'+r.desc+'</div></div><div class="fi-rec-badge" style="background:'+r.bc+';color:'+r.bt+'">'+r.badge+'</div></div>';
    }).join('');
  }

})();
</script>
