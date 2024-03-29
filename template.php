<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        Template for and interactive web page
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS FILE -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
        crossorigin="anonymous">
</head>

<body>
<div class="container" style="margin-top: 30px">

    <!-- Header Section-->
    <header class="jumbotron text-center row" style="margin-bottom: 2px; background: linear-gradient(white, #0073e6); padding: 20px;">
        <?php include('header-for-template.php'); ?>
    </header>

    <!-- Body Section-->
    <div class="row" style="padding-left: 0px;">

        <!-- Left-side Column Menu Section-->
        <nav class="col-sm-2">
            <ul class="nav nav-pills flex-column">
                <?php include('nav.php'); ?>
            </ul>
        </nav>

        <!-- Center Column Content Section-->
        <div class="col-sm-8">
            <h2 class="text-center"> This is the <?php echo $page;?> Page</h2>
            <p>The home page content. The home page content. The home page content. The home page content.
            <br>
                The home page content. The home page content.<br>
                The home page content. The home page content. The home page content. </p>
        </div>

        <!-- Right-side Column Content Section-->
        <aside class="col-sm-2">
            <?php include('info-col.php'); ?>
        </aside>
    </div>

    <!-- footer Content Section-->
    <footer class="jumbotron text-center row" style="padding-bottom: 1px; padding-top: 8px;">
        <?php include('footer.php'); ?>
    </footer>
</div>
</body>
</html>