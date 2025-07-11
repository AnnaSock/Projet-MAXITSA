<?php 
namespace Src\Entity;

enum TypeTransaction: string{
    case DEPOT = "Depot";
    case RETRAIT = "Transaction";
    case PAYEMENT = "Payement";
}