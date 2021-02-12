<?php
    require_once('session.php');
    require_once('header.php');
?>

<div class="wrapper">
    <nav id="sidebar">

    <div class="sidebar-header">
        <h1>SCRUM IO</h1>
    </div>

    <ul class="lisst-unstyled components">
        <li class="active">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">HOME</a> 
            <ul class="collapse lisst-unstyled" id="homeSubmenu">
                <li>
                <a href="#">DATA 1</a>
                </li>
                <li>
                <a href="#">DATA2 1</a>
                </li>
            </ul>    
        </li>
        <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">PAGES</a> 
            <ul class="collapse lisst-unstyled" id="pageSubmenu">
                <li>
                <a href="#">Page 1</a>
                </li>
                <li>
                <a href="#">Page 2</a>
                </li>
            </ul>    
        </li>
    </ul>

    </nav>


    <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button type="button" id="sidebarCollapse" class="btn btn-info">
                <i class="fas fa-align-left"></i>
                <span>CLICK</span>
            </button>    
        </div>
        
        </nav>
        <br><br>
        
        <div class="card-group mb-5">
            
        <div class="card border-primary mb-3" style="max-width: 18rem;">
            <div class="card-header bg-success">Header</div>
            <div class="card-body text-primary">
                <h5 class="card-title">Primary card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        
        <div class="card border-primary mb-3" style="max-width: 18rem;">
        <div class="card-header bg-success">Header</div>
        <div class="card-body text-primary">
            <h5 class="card-title">Primary card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        </div>
        
        <div class="card border-primary mb-3" style="max-width: 18rem;">
        <div class="card-header bg-success">Header</div>
        <div class="card-body text-primary">
            <h5 class="card-title">Primary card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        </div>
        


        </div>

        <div class="card-group">
            <div class="card">
                <div class="card-body p-0">
                    <div class="card-header bg-info">RESERVATION DATA</div>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur aperiam nesciunt, ab ex dolore autem aliquid nobis? Tenetur ipsum, fugiat, ad natus maiores dicta alias culpa cum, dolorum distinctio et.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur aperiam nesciunt, ab ex dolore autem aliquid nobis? Tenetur ipsum, fugiat, ad natus maiores dicta alias culpa cum, dolorum distinctio et.
                </div>
            </div>
            <div class="card">
                <div class="card-body p-0">
                    <div class="card-header bg-success">TO DO LIST</div>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur aperiam nesciunt, ab ex dolore autem aliquid nobis? Tenetur ipsum, fugiat, ad natus maiores dicta alias culpa cum, dolorum distinctio et.
                </div>
            </div>
            <div class="card">
                <div class="card-body p-0">
                    <div class="card-header bg-warning">CLIENTS</div>
                   <div class="text-center">
                   <p>USER 1</p>
                   <p>USER 1</p>
                   <p>USER 1</p>
                   </div>
                </div>
            </div>
           
        </div>
        <div class="card-group mt-5">
            <div class="card bg-info">
                <img class="card-img-top" data-src="holder.js/100x180/" alt="">
                <div class="card-body">
                    <h4 class="card-title">GRAPH 1</h4>
                    <p class="card-text"></p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum ipsum aliquam nihil autem impedit et, culpa dolorum consequatur ipsa inventore facilis commodi illo in non molestiae quo. Eligendi, molestias nihil.
                </div>
            </div>
            <div class="card bg-success">
                <img class="card-img-top" data-src="holder.js/100x180/" alt="">
                <div class="card-body">
                    <h4 class="card-title">GRAPH 2</h4>
                    <p class="card-text">CONTENT</p>
                </div>
            </div>
            <div class="card bg-primary">
                <img class="card-img-top" data-src="holder.js/100x180/" alt="">
                <div class="card-body">
                    <h4 class="card-title">GRAPH 3</h4>
                    <p class="card-text">Text</p>
                </div>
            </div>
        
        </div>


    </div>
</div>



 
<?php
    require_once('../footer.php');
?>
<script>

$(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });

</script>