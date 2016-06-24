		</div>

    </div>

    <script type="text/javascript">
    	$(function(){
    		$(".delete").click(function(e){
    			e.preventDefault();
	    		$(this).each(function(){
	    			if(confirm('Apakah anda yakin menghapus data ini?')){
	    				location.href=$(this).attr("href");
	    			}
	    		});
    		});
    	});
    </script>
</body>
</html>