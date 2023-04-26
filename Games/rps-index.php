<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rock paper scissors</title>
    <script src="rpslogic.js" defer></script>
    <link rel="stylesheet" href="rps-styling.css">
</head>
<body>
    <p class="pagehead">ROCK-PAPER-SCISSOR</p>
    <P class="subhead">TERMINATOR EDITION</p>
    <div class="options">
        <div class="selectchoice>">
            <button class="buttonimage" id="rockButton">
                <img src="rock.png" height="200px" width="200px">
                <p class="textselect">Rock</p>
            </button>

        </div>
        <div class="selectchoice>">
            <button class="buttonimage" id="paperButton">
                <img src="paper.png" height="200px" width="200px">
                <p class="textselect">Paper</p>
            </button>
            
        </div>
        <div class="selectchoice>" id="scissorButton">
            <button class="buttonimage">
                <img src="scissor.png" height="200px" width="200px">
                <p class="textselect">Scissors</p>
            </button>
            
        </div>
    </div>
    <div class="ChoiceDisplay">
        <div class="PlayerStatement"></div>
        <div class="ComputerStatement"></div>

    </div>
    <div class="RoundResult"></div>
    <div class="ScoreBoard">
        <div class="PlayerScore">
            <div class="PlayerTitle"></div>
            <div class="PlayerPoints"></div>
        </div>
        <div class="ComputerScore">
            <div class="ComputerTitle"></div>
            <div class="ComputerPoints"></div>
        </div>    
        
    </div>

    

    
</body>
</html>