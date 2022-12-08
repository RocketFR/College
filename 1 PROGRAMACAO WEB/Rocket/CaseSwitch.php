<?php

$bebida = 3;
$quantidade = 3;

switch ($bebida)

{
    case 1:
        print "whisk";
        echo $quantidade;       
        break;
        
        case 2: 
            print "cerveja";
            echo $quantidade ;           
            break;

            case 3: 
                print "vinho;";                
                echo $quantidade;                
                break;

                case 4: 
                    print"Tequila";
                    echo $quantidade;                    
                    break;

                        default:             
                        print "nao bebo";                        
                        echo $quantidade;                        
                        break;
}

?> 