
 {{ form('xml/upload', 'class': 'form-inline', 'enctype': 'multipart/form-data') }}
     	<span>
        	{{ file_field('xml', 'class': 'input-xxlarge', 'style' : 'font-size:15px; height:40px; margin-top: 3px;') }}
        	{{ submit_button('Upload XML &raquo;', 'class': 'btn btn-primary btn-large btn-success') }}
    	</span>
	</form>