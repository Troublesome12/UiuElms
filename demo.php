<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- My custom CSS -->
        <link href="css/my-website.css" rel="stylesheet">
        <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">

        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    </head>
    <body>

        <div class="container">
            <h2>Modal Example</h2>
            <!-- Trigger the modal with a button -->
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title text-center">Vote</h3>
                        </div>
                        <!--                        <div class="modal-body">
                                                    <div data-role="main" class="ui-content">
                                                        <h4>Helpfulness</h4>
                                                        <input type="range" name="points" id="points" value="1" min="1" max="5" data-highlight="true" data-popup-enabled="true">
                                                    </div>
                        
                                                    <div data-role="main" class="ui-content">
                                                        <h4>Clarity</h4>
                                                        <input type="range" name="points" id="points" value="1" min="1" max="5" data-highlight="true" data-popup-enabled="true">
                                                    </div>
                        
                                                    <div data-role="main" class="ui-content">
                                                        <h4>Easiness</h4>
                                                        <input type="range" name="points" id="points" value="1" min="1" max="5" data-highlight="true" data-popup-enabled="true">
                                                    </div>-->

                        <div class="ui-field-contain">
                            <label for="slider-2">Input slider:</label>
                            <input type="range" name="slider-2" id="slider-2" value="3" min="1" max="5" data-highlight="true" data-popup-enabled="true">
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <script>

        </script>
    </body>
</html>
