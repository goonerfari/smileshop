<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-site-verification" content="4V3abYOGDyUfT95-e_FmVTr1oN2gE9_oFjg20pVelPo" />

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,400,600,700" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Baloo+Tamma" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Sorts+Mill+Goudy" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">




<!-- Styles -->

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link href="css/app.css" rel="stylesheet">


<!-- Scripts -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<script>
    $(document).ready(function() {
        if ($(window).width() < 692) {
            $('#footer .footer ul li').hide();
            $('#footer .footer ul').click(function () {
                $(this).find('h2 i').toggleClass('fa-arrow-right fa-arrow-down');
                $('li', this).toggle('fast');
            });
        }
        else (
            $('#footer .footer ul li').show()
        );
        
    });
</script>
