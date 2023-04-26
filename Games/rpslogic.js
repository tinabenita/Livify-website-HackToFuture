let playerName;
let playerSelection;
let computerSelection;
let matchVar;
let computerScore=0;
let playerScore=0;
let roundNumber=0;
let playerChoice;

function displayPlayerHand(handReading)
    {   

        if(handReading==0)
            document.querySelector(".PlayerStatement").textContent=
            playerName +" chose Rock";
        else if(handReading==1)
            document.querySelector(".PlayerStatement").textContent=
            playerName +" chose Paper";
        else
            document.querySelector(".PlayerStatement").textContent=
            playerName +" chose Scissor";
    }
function displayComputerHand(handReading)
    {   
        if(handReading==0)
            document.querySelector(".ComputerStatement").textContent=
            playerName +" chose Rock";
        else if(handReading==1)
            document.querySelector(".ComputerStatement").textContent=
            playerName +" chose Paper";
        else
            document.querySelector(".ComputerStatement").textContent=
            playerName +" chose Scissor";
    }

    

function playerDecision(playerPick)
    {   
        let playerHand;
        if(playerPick==0)
            playerHand="Rock";
        else if (playerPick==1)
            playerHand="Paper";
        else
            playerHand="Scissor";  
        return playerHand;      
    }


function getComputerChoice()
    {   
        playerName="Computer";
        let computerChoice;
        computerChoice = Math.floor(Math.random()*3);
        displayComputerHand(computerChoice);
        return computerChoice;
    }

function getPlayerChoice(buttonIdentity)
    {   
        playerName="You";
        
        if(buttonIdentity=="rockButton")
            {playerChoice=0;
             displayPlayerHand(playerChoice);}

        else if(buttonIdentity=="paperButton")
            {playerChoice=1;
             displayPlayerHand(playerChoice);}

        else
            {playerChoice=2;
             displayPlayerHand(playerChoice);}
        return playerChoice;
           
    }
    
function playRound(element)
    {   
        
        if((playerScore==5)||(computerScore==5))
            return;
        playerSelection=getPlayerChoice(element);
        let playerHandName=playerDecision(playerSelection);
        computerSelection=getComputerChoice();
        let computerHandName=playerDecision(computerSelection);
        matchVar=computerSelection.toString() + playerSelection.toString();
        if(matchVar=="01"||matchVar=="12"||matchVar=="20")
            {
                document.querySelector(".RoundResult").textContent=
                "You won this round! "
                + playerHandName +" beats " + computerHandName + "!";
                ++playerScore;
                
            }
        else if(matchVar=="02"||matchVar=="10"||matchVar=="21")
            {
                document.querySelector(".RoundResult").textContent=
                "You lose this round! " + computerHandName +" beats " + playerHandName + "!";
                ++computerScore;
            }    
        else
            {
                document.querySelector(".RoundResult").textContent=
                "It's a tie!";
            }

            document.querySelector(".PlayerTitle").textContent= "Your score:"  
            document.querySelector(".ComputerTitle").textContent= "Computer score:"
            document.querySelector(".PlayerPoints").textContent= playerScore;
            document.querySelector(".ComputerPoints").textContent= computerScore;  
        if(playerScore==5)
            {
        
                const DIV_RESULT=document.createElement("div");
                DIV_RESULT.innerText=
                "You won the match! Humanity lives to fight another day";  
                document.querySelector(".RoundResult").appendChild(DIV_RESULT);
                         
            }
        else if(computerScore==5)
            {
                const DIV_RESULT=document.createElement("div");
                DIV_RESULT.innerText=
                "You lost the match! Prepare for Judgement Day!";  
                document.querySelector(".RoundResult").appendChild(DIV_RESULT); 
            }    
        return matchVar;  
    }    
 
const buttonRock=document.querySelector('#rockButton');

buttonRock.addEventListener('click',()=>{playRound(buttonRock.id);});

const buttonPaper=document.querySelector('#paperButton');

buttonPaper.addEventListener('click',()=>{playRound(buttonPaper.id);});

const buttonScissor=document.querySelector('#scissorButton');

buttonScissor.addEventListener('click',()=>{playRound(buttonScissor.id);});




