<x-guest-layout>
 



<section class="container">
   <h1 class="my-4 text-center">Product: {{$product->name}}</h1>

   <form-product :product= "{{$product}}"></form-product>

    
        
   
  </section>

</x-guest-layout>