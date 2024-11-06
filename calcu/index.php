<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
     <link rel="stylesheet" href="bootstrap2.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>AppDev: Calculator</title>
    <script src="main.js"></script>
</head>
<body>
    <div class="container text-center">
        <div class="container-calcu">
            
            <div class="calcudiv">
            <table width="100%">
                <tr>
                    <td colspan="5"><h1> Calculator</h1><br></td>
                </tr>
                <tr>
                    <td colspan="5"><input type="text" class="form-control text-right" id="txt_output" readonly></td>
                </tr>
                <tr>
                    <td colspan="5"><hr></td>
                </tr>
                <tr>
                    <td><button type="button" text="7" class="btn btn-light">7</button></td>
                    <td><button type="button" text="8" class="btn btn-light">8</button></td>
                    <td><button type="button" text="9" class="btn btn-light">9</button></td>
                    <td><button type="button" class="clearbtn btn-secondary" id="clearbtn">C</button></td>
                    <td><button type="button" class="delbtn btn-secondary" id="delbtn">DEL</span></button></td>
                </tr>

                <tr>
                    <td><button type="button" text="4" class="btn btn-light">4</button></td>
                    <td><button type="button" text="5" class="btn btn-light">5</button></td>
                    <td><button type="button" text="6" class="btn btn-light">6</button></td>
                    <td><button type="button" text="/" class="btn btn-secondary">÷</button></td>
                    <td><button type="button" text="*" class="btn btn-secondary">×</button></td>
                </tr>

                <tr>
                    <td><button type="button" text="1" class="btn btn-light">1</button></td>
                    <td><button type="button" text="2" class="btn btn-light">2</button></td>
                    <td><button type="button" text="3" class="btn btn-light">3</button></td>
                    <td><button type="button" text="-" class="btn btn-secondary">-</button></td>
                    <td><button type="button" text="+" class="btn btn-secondary">+</button></td>
                </tr>

                <tr>
                    <td><button type="button" text="0" class="btn btn-light" id="btn">0</button></td>
                    <td><button type="button" text="." class="btn btn-light" id="btn">.</button></td>
                    <td colspan="3"><button type="button" class="equalbtn btn-primary" id="equalbtn">=</button></td>
                </tr>

                <tr>
                    <td colspan="2.5"><button type="button" text="(" class="btn btn-secondary" id="btn"><span>&#40;</span></button></td>
                    <td colspan="2.5"><button type="button" text=")" class="btn btn-secondary" id="btn"><span>&#41;</span></button></td>
                </tr>
                    
                
            </table>


            </div>
        </div>

    </div>
</body>
</html>