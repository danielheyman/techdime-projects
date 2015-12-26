<?php include 'header.php'; ?>
	
<div class="row">
    
    <div class="col-md-12">
        
        <div class="error-container">
            <h1>Oops!</h1>
            
            <h2>404 Not Found</h2>
            
            <div class="error-details">
                Sorry, an error has occured, Requested page not found!
                
            </div> <!-- /error-details -->
            
            <div class="error-actions">
                <a href="<?=$site["url"]?>" class="btn btn-primary btn-lg">
                    <i class="icon-chevron-left"></i>
                    &nbsp;
                    Back to Dashboard						
                </a>
                
                <a href="<?=$site["url"]?>contact" class="btn btn-default btn-lg">
                    <i class="icon-envelope"></i>
                    &nbsp;
                    Contact Support						
                </a>
                
            </div> <!-- /error-actions -->
                        
        </div> <!-- /error-container -->			
        
    </div> <!-- /span12 -->
    
</div> <!-- /row -->
	<br><br><br><br><br><br><br>
<?php include 'footer.php'; ?>