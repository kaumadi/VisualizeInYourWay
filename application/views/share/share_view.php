<div class="page-title">	
    <h3><?php echo $heading; ?></h3>		
</div>

<div class="col-md-12">
<div class="grid simple">
<div class="grid-title no-border">
<h4>Morris <span class="semi-bold">Charts</span></h4>
<div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
</div>
<div class="grid-body no-border">
<div class="row">
<div class="col-md-6">
<!--<h4>Morris <span class="semi-bold">Line Charts</span></h4>
<p> Line graphs are probably the most widely used graph for showing trends.
Chart.js has a ton of customisation features for line graphs, along with support for multiple datasets to be plotted on one chart. </p>-->
<div id="line-example" style="position: relative;"><svg height="342" version="1.1" width="412" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="33.5" y="308" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#aaaaaa" d="M46,308H387" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="33.5" y="237.25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">25</tspan></text><path fill="none" stroke="#aaaaaa" d="M46,237.25H387" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="33.5" y="166.5" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">50</tspan></text><path fill="none" stroke="#aaaaaa" d="M46,166.5H387" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="33.5" y="95.75" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">75</tspan></text><path fill="none" stroke="#aaaaaa" d="M46,95.75H387" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="33.5" y="25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">100</tspan></text><path fill="none" stroke="#aaaaaa" d="M46,25H387" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="387" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan></text><text x="330.1926061159288" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2011</tspan></text><text x="273.3852122318576" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2010</tspan></text><text x="216.5778183477864" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2009</tspan></text><text x="159.61478776814238" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2008</tspan></text><text x="102.80739388407119" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2007</tspan></text><text x="46" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2006</tspan></text><path fill="none" stroke="#d1dade" d="M46,194.8C60.2018484710178,184.1875,88.60554541305339,152.35,102.80739388407119,152.35C117.00924235508899,152.35,145.41293929712458,198.3326607387141,159.61478776814238,194.8C173.8555454130534,191.2576607387141,202.3370607028754,124.04999999999998,216.5778183477864,124.04999999999998C230.7796668188042,124.04999999999998,259.1833637608398,194.8,273.3852122318576,194.8C287.5870607028754,194.8,315.990757644911,141.73749999999998,330.1926061159288,124.04999999999998C344.3944545869466,106.36249999999998,372.7981515289822,70.98749999999998,387,53.29999999999998" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#0aa699" d="M46,166.5C60.2018484710178,155.8875,88.60554541305339,124.04999999999998,102.80739388407119,124.04999999999998C117.00924235508899,124.04999999999998,145.41293929712458,170.0326607387141,159.61478776814238,166.5C173.8555454130534,162.95766073871408,202.3370607028754,95.75,216.5778183477864,95.75C230.7796668188042,95.75,259.1833637608398,166.5,273.3852122318576,166.5C287.5870607028754,166.5,315.990757644911,113.4375,330.1926061159288,95.75C344.3944545869466,78.0625,372.7981515289822,42.6875,387,25" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="46" cy="194.8" r="4" fill="#d1dade" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="102.80739388407119" cy="152.35" r="4" fill="#d1dade" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="159.61478776814238" cy="194.8" r="4" fill="#d1dade" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="216.5778183477864" cy="124.04999999999998" r="4" fill="#d1dade" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="273.3852122318576" cy="194.8" r="4" fill="#d1dade" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="330.1926061159288" cy="124.04999999999998" r="4" fill="#d1dade" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="387" cy="53.29999999999998" r="7" fill="#d1dade" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="46" cy="166.5" r="4" fill="#0aa699" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="102.80739388407119" cy="124.04999999999998" r="4" fill="#0aa699" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="159.61478776814238" cy="166.5" r="4" fill="#0aa699" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="216.5778183477864" cy="95.75" r="4" fill="#0aa699" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="273.3852122318576" cy="166.5" r="4" fill="#0aa699" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="330.1926061159288" cy="95.75" r="4" fill="#0aa699" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="387" cy="25" r="7" fill="#0aa699" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg> <div class="morris-hover morris-default-style" style="left: 319px; top: 35px;"><div class="morris-hover-row-label">2012</div><div class="morris-hover-point" style="color: #0aa699">
  Series A:
  100
</div><div class="morris-hover-point" style="color: #d1dade">
  Series B:
  90
</div></div></div>
</div>
<div class="col-md-6">
<!--<h4>Morris <span class="semi-bold">Area Charts</span></h4>
<p> Line graphs are probably the most widely used graph for showing trends.
Chart.js has a ton of customisation features for line graphs, along with support for multiple datasets to be plotted on one chart. </p>-->
<div id="area-example" style="position: relative;"><svg height="342" version="1.1" width="412" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.5px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="33.5" y="308" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#aaaaaa" d="M46,308H387" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="33.5" y="237.25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">50</tspan></text><path fill="none" stroke="#aaaaaa" d="M46,237.25H387" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="33.5" y="166.5" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">100</tspan></text><path fill="none" stroke="#aaaaaa" d="M46,166.5H387" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="33.5" y="95.75" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">150</tspan></text><path fill="none" stroke="#aaaaaa" d="M46,95.75H387" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="33.5" y="25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">200</tspan></text><path fill="none" stroke="#aaaaaa" d="M46,25H387" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="387" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan></text><text x="330.1926061159288" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2011</tspan></text><text x="273.3852122318576" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2010</tspan></text><text x="216.5778183477864" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2009</tspan></text><text x="159.61478776814238" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2008</tspan></text><text x="102.80739388407119" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2007</tspan></text><text x="46" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2006</tspan></text><path fill="#eceeee" stroke="#000000" d="M46,39.14999999999998C60.2018484710178,56.837499999999984,88.60554541305339,92.2125,102.80739388407119,109.9C117.00924235508899,127.5875,145.41293929712458,180.64999999999998,159.61478776814238,180.64999999999998C173.8555454130534,180.64999999999998,202.3370607028754,109.9,216.5778183477864,109.9C230.7796668188042,109.9,259.1833637608398,180.64999999999998,273.3852122318576,180.64999999999998C287.5870607028754,180.64999999999998,315.990757644911,127.5875,330.1926061159288,109.9C344.3944545869466,92.2125,372.7981515289822,56.837499999999984,387,39.14999999999998L387,308L46,308Z" fill-opacity="0.5" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 0.5;"></path><path fill="none" stroke="#b7c1c5" d="M46,39.14999999999998C60.2018484710178,56.837499999999984,88.60554541305339,92.2125,102.80739388407119,109.9C117.00924235508899,127.5875,145.41293929712458,180.64999999999998,159.61478776814238,180.64999999999998C173.8555454130534,180.64999999999998,202.3370607028754,109.9,216.5778183477864,109.9C230.7796668188042,109.9,259.1833637608398,180.64999999999998,273.3852122318576,180.64999999999998C287.5870607028754,180.64999999999998,315.990757644911,127.5875,330.1926061159288,109.9C344.3944545869466,92.2125,372.7981515289822,56.837499999999984,387,39.14999999999998" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="46" cy="39.14999999999998" r="7" fill="#b7c1c5" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="102.80739388407119" cy="109.9" r="4" fill="#b7c1c5" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="159.61478776814238" cy="180.64999999999998" r="4" fill="#b7c1c5" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="216.5778183477864" cy="109.9" r="4" fill="#b7c1c5" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="273.3852122318576" cy="180.64999999999998" r="4" fill="#b7c1c5" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="330.1926061159288" cy="109.9" r="4" fill="#b7c1c5" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="387" cy="39.14999999999998" r="4" fill="#b7c1c5" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><path fill="#2ea4e1" stroke="#000000" d="M46,166.5C60.2018484710178,175.34375,88.60554541305339,193.03125,102.80739388407119,201.875C117.00924235508899,210.71875,145.41293929712458,237.25,159.61478776814238,237.25C173.8555454130534,237.25,202.3370607028754,201.875,216.5778183477864,201.875C230.7796668188042,201.875,259.1833637608398,237.25,273.3852122318576,237.25C287.5870607028754,237.25,315.990757644911,210.71875,330.1926061159288,201.875C344.3944545869466,193.03125,372.7981515289822,175.34375,387,166.5L387,308L46,308Z" fill-opacity="0.5" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 0.5;"></path><path fill="none" stroke="#0090d9" d="M46,166.5C60.2018484710178,175.34375,88.60554541305339,193.03125,102.80739388407119,201.875C117.00924235508899,210.71875,145.41293929712458,237.25,159.61478776814238,237.25C173.8555454130534,237.25,202.3370607028754,201.875,216.5778183477864,201.875C230.7796668188042,201.875,259.1833637608398,237.25,273.3852122318576,237.25C287.5870607028754,237.25,315.990757644911,210.71875,330.1926061159288,201.875C344.3944545869466,193.03125,372.7981515289822,175.34375,387,166.5" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="46" cy="166.5" r="7" fill="#0090d9" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="102.80739388407119" cy="201.875" r="4" fill="#0090d9" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="159.61478776814238" cy="237.25" r="4" fill="#0090d9" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="216.5778183477864" cy="201.875" r="4" fill="#0090d9" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="273.3852122318576" cy="237.25" r="4" fill="#0090d9" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="330.1926061159288" cy="201.875" r="4" fill="#0090d9" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="387" cy="166.5" r="4" fill="#0090d9" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg> <div class="morris-hover morris-default-style" style="left: 0px; top: 78px;"><div class="morris-hover-row-label">2006</div><div class="morris-hover-point" style="color: #0090d9">
  Series A:
  100
</div><div class="morris-hover-point" style="color: #b7c1c5">
  Series B:
  90
</div></div></div>
    
    <button class="btn btn-primary btn-cons" id="share_btn" type="button">
                                    Share
                                </button>
    
    
           
                <button class="btn btn-primary" type="button" id="graph_print_btn"><i class="fa fa-print"></i></button>
            
        
    
    
    
</div>
</div>
</div>
</div>
</div>


<script type="text/javascript">
    $('#share_and_print_parent_menu').addClass('active open');
</script>