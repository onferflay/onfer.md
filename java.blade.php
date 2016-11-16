<html>
   <head>
      
      <script type="text/javascript">
      function addprice(pret){
      	with(this){
      	price=pret;
      }
      }
      function book(title,author){
      		this.title=title;
      		this.author=author;
      		this.price=0;
      		this.addprice=addprice;
      }
      </script>
      
   </head>
   
   <body>
   <script type="text/javascript">
   var mybook = new book("ivan","anna");
   mybook.addprice(100);
   document.write("titlu este "+mybook.title+"<br/>autorul este "+mybook.author+"<br/>pretul= "+mybook.price.toExponential());
   </script>
   </body>
</html>