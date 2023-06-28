<!DOCTYPE html>
 <html lang="en">
 <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"  /> --}}

	<link rel="stylesheet" href="style.css">
	<title>facture</title>
	<style>

        body{
			box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
			width: 100%;
			margin-left: auto;
			margin-right: auto;
			padding-bottom: 3rem;
		}
		.header{
			padding: 2rem 1rem 2rem 0;
			background: #02345c;
			display: flex;
			justify-content: space-between;
			
		}
		.header .top{
			display: flex;
			justify-content: space-between;
		}
		.header .top h5{
			color: white;
		}
		.header .top h1{
			color: white;
			font-weight: bold
		}
		.header .top img{
                     
            width: 150px;
			margin-left: 20px;
		}
		.information{
			display: flex;
			width: 100%;
			margin-top: 3rem;
			margin-bottom: 3rem;
		}
		.information .right{
			width: 50%;


		}
		.information .right ul{
			list-style: none;
		}
		.information .right ul li strong{
			opacity: 0.8;
		}
		.information .left{
			width: 50%;
			text-align: right;
			padding-right: 10%;
		}
		.information .left p strong{
			opacity: 0.8;
		}
		.detail .titre{
			padding-left: 27px;
		}
		.detail .titre h6 strong{
			opacity: 0.8;
		}
		.detail .tableau table {
			width: 80%;
            border-collapse: collapse;
			margin-left: auto;
			margin-right: auto;
			margin-top: 1rem;
			box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;


		}
		

		  

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        /* Style pour les cellules de la première colonne */
        td:first-child {
            font-weight: bold;
			opacity: 0.8;
        }

        /* Style pour les cellules de la dernière colonne */
        td:last-child {
            text-align: left;
        }
		.contact {
			padding-left: 27px;
			margin-top: 4rem;

		}
		.contact p .s{
			color: #ffeb3b;
			font-size: 18px;
		}
		.contact p strong{
			opacity: 0.8;
		}

		@media (max-width:750px){
			.header .top{
				display: block;
				text-align: center;
			}
			.information {
			 display: block;
			 text-align: center;
			}
			.information .right{
				width: 100%;
			}
			.information .left{
				width: 100%;
			}
		}

	</style>
 </head>
 <body>


   <div class="header">
	<div class="container top">
		
	 
			 <h1>LTCHOST</h1>
	   
			<h5>Facture de LTCHOST</h5>
	 
	</div>
   </div>

   <div class="information">
	   <div class="right">
          <ul>
			<li><strong>Nom du client :</strong> Test Client </li>
			<li><strong>Email :</strong> franckndi5@gmail.com </li>
			<li><strong>telephone :</strong> +237 658 682 586</li>
			 
		  </ul>
	   </div>
	   <div class="left">
          <p><strong>Date de facturation : </strong> 27/07/20223</p>
	   </div>
   </div>

   <div class="detail">
	   
		<div class="titre">
			<h6><strong>Details de la facture</strong></h6>
		</div>

		<div class="tableau">
		 
 
 
    <table>
        <thead>
            <tr>
                <th></th>
                <th>Prix</th>
                <th>Durée</th>
				
             
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Hebergemrnt web</td>
                <td>{{20000}} F CFA</td>
                <td>{{ 1 }} An</td>
                
            </tr>
            <tr>
                <td>Nom de domaine</td>
                <td>{{ 3000 }} F CFA</td>
                <td>{{ 1 }} An</td>
               
            </tr>
             
        </tbody>
		<tfoot>
            <tr>
                <td>Total</td>
                <td>{{ 23000 }} F CFA </td>
            </tr>
        </tfoot>
         
    </table>
 

		</div>
	  
   </div>

   <div class="contact">

	 <p>Merci de votre confiance en LTC HOST.</p>
	 <p><strong>Coordonnées :</strong> Yaoundé : Mvan descent into BEAC complex, Yaoundé, Cameroon. | Douala : Immeuble Saker Ndokotti Coming from the Ndokotti tunnel just after the total magzi</p>
	 <p><strong>Phone :</strong>  +237 673 209 375|+237 691 371 922</p>
	 <p><strong>Email:</strong> contact@ltcgroup.net </p>
	 <p>Visitez nous_: <a href=" https://www.ltcgroup.net"> https://www.ltcgroup.net.</a></p>
	 <p>Merci <i class="s fa fa-face-smile"></i> <i class="s fa fa-face-smile"></i> </p>


   </div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 </body>
 </html>
