<x-frontend-layout>


    <Section>
        <div class="container m-auto py-10">
            <h1 class="text-center text-2xl font-semibold mb-5">Course Entry Form</h1>
            <div class="container  ">
                <form action="/save-course" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-2 gap-10 p-10 shadow-xl shadow-gray-500" >
                        <div>
                            <label for="name">Course Name <span class="text-red-600">*</span></label>
                            <input type="text" name="name"id="name" class="w-full rounded-md mt-2 " required>
                        </div>
                        <div>
                            <label for="price">Course Price <span class="text-red-600">*</span></label>
                            <input type="text" name="price"id="price" class="w-full rounded-md mt-2 " required>
                        </div>
                        <div>
                            <label for="duration">Course Duration <span class="text-red-600">*</span></label>
                            <input type="text" name="duration"id="duration" class="w-full rounded-md mt-2 " required>
                        </div>
                        <div>
                            <label for="image">Course Image <span class="text-red-600">*</span></label>
                            <input type="file" name="image"id="image" class="w-full rounded-md mt-2 " required>
                        </div>
                           <div>
                           <button class="py-2 px-8 rounded-md bg-blue-500 text-white" type="submit">Submit</button>
                           </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </Section>


    <section class="py-10">
        <div class="container m-auto">
            <table class="w-full text-center border border-gray-500">
               <thead class="border border-gray-500">
                <tr class="border border-gray-500">
                    <th class="py-2 border border-gray-400">S.No.</th>
                    <th class="py-2 border border-gray-400">Image</th>
                    <th class="py-2 border border-gray-400">Name</th>
                    <th class="py-2 border border-gray-400">Price</th>
                    <th class="py-2 border border-gray-400">Duration</th>
                    <th class="py-2 border border-gray-400">Action</th>
                </tr>
               </thead>
               <tbody class="border border-gray-500">
                @foreach ($courses as $item)

                <tr class="border border-gray-500">
                    <td class="py-2 border border-gray-500"> {{$item->id}}</td>
                    <td class="py-2 border border-gray-500">
                        <img class="h-20 items-center" src="{{ asset($item->image) }}" alt="{{$item->name}}">
                    </td>
                    <td class="py-2 border border-gray-500">{{$item->name}}</td>
                    <td class="py-2 border border-gray-500">{{$item->price}}</td>
                    <td class="py-2 border border-gray-500">{{$item->duration}}</td>
                    <td class="py-2 border border-gray-500">
                        <form action="/course-delete/{{$item->id}}" method="post">
                            @csrf
                            @method('delete')
                        <button>Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
               </tbody>
            </table>
        </div>
    </section>
    <x-courses/>
</x-frontend-layout>
