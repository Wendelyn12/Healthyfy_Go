<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    WHAT DO YOU WANT TO DO? <br> 
                    <br>
                  <a style="margin-right: 200px;"> <b>Services Offered: </b></a><br><br>
                 * Vaccination <br>
                  * Consultation <br>
                 * Pre-natal <br>
                 * Immunization <br>

                </div>
            </div>
            <break>
            <div>
             <div style="margin-left:10%;">  
            <input  type="image" src="/images/inve.png"  width="100" height="100" left="0">
            <a href="{{ url('/metric/') }}" title="View Inventory"><button style="right:100" class="btn btn-info btn-sm"><i aria-hidden="true"></i> Inventory</button></a>
</div>

            <div style="margin-left:10%;"> 
             <input  type="image" src="/images/appli.png"  width="100" height="100" left="0">
            <a  href="{{ url('/appointment/') }}" title="Book Appointment"><button style="right:100" class="btn btn-info btn-sm"><i aria-hidden="true"></i> Appointment</button></a>
</div>
       
          
        </div>
    </div>
</x-app-layout>
