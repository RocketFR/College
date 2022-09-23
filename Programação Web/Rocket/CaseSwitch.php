<?php

$bebida = 3;
$quantidade = 3;

switch ($bebida)

{
    case 1:
        print "whisk";
        for ($quantidade = 0; $quantidade >= 0; $quantidade+=1){  
        echo $quantidade;
        }
        break;
        case 2: 
            print "cerveja";
            for ($quantidade = 0; $quantidade >= 0; $quantidade+=1) { 
            echo $quantidade ; 
            }
            break;
            case 3: 
                print "vinho;";
                for ($quantidade = 0; $quantidade >= 0; $quantidade+=1)  {
                echo $quantidade;
                }
                break;
                case 4: 
                    print"Tequila";
                    for ($quantidade = 0; $quantidade >= 0; $quantidade+=1)  {
                    echo $quantidade;
                    }
                    break;
                        default:             
                        print "nao bebo";
                        for ($quantidade = 0; $quantidade >= 0; $quantidade+=1)  {
                        echo $quantidade;
                        }    
                        break;
}

?> 