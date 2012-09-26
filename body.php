<article class='module width_3_quarter'>
		
       <div id="chart_div" style="height:322px;"></div>
		
		</article><!-- end of content manager article -->
		
		<article class='module width_quarter'>
			<header><h3>Messages</h3></header>
			<div class='message_list'>
				<div class='module_content'>
					<div class='message'><p>V'ivámus sagittis lacus vel augue laoreet rutrum faucibus dolor.</p>
					<p><strong>John Doe</strong></p></div>
					<div class='message'><p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor.</p>
					<p><strong>John Doe</strong></p></div>
					<div class='message'><p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor.</p>
					<p><strong>John Doe</strong></p></div>
					<div class='message'><p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor.</p>
					<p><strong>John Doe</strong></p></div>
					<div class='message'><p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor.</p>
					<p><strong>John Doe</strong></p></div>
				</div>
			</div>
			<footer>
				<form class='post_message'>
					<input type='text' value='Message' onFocus='if(!this._haschanged){this.value=''};this._haschanged=true;'>
					<input type='submit' class='btn_post_message' value=''/>
				</form>
			</footer>
		</article><!-- end of messages article -->
		
		<div class='clear'></div>
		<div class='spacer'></div>
	</section>

<script type='text/javascript'>

 
      google.load('visualization', '1', {packages:['corechart']});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2004',  1000,      400],
          ['2005',  1170,      460],
          ['2006',  660,       1120],
          ['2007',  1030,      540]
        ]);

        var options = {
          title: 'Company Performance'
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>