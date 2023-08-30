<x-guest-layout>
    <div class="container w-full px-5 py-6 mx-auto">
        <div class="grid lg:grid-cols-4 gap-y-6">
            @foreach ($categories as $category)
                <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
                    <img class="w-full h-48" src="{{ Storage::url($category->image) }}" alt="Image" />
                    <div class="px-6 py-4">

                        <a href="{{ route('categories.show', $category->id) }}">
                            <h4
                                class="mb-3 text-xl font-semibold tracking-tight text-gray-600 hover:text-gray-400 uppercase">
                                {{ $category->name }}</h4>
                        </a>


      <br /><br />
      
                    </div>
                </div>
            @endforeach
        
        </div>
    </div>

    <script src="script.js">




    </script>
</body>
</html>

<style>
    .about-page {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 150px;
    font-family: Verdana, sans-serif;
}

.team-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    grid-gap: 100px;
    width: 1300px;
    height: 500px;
    margin-top: 110px;
}

.team-member {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    background-color: rgba(127, 127, 136, 0.027);
}

.profile-photo {
    width: 200px;
    height: 235px;
    border-radius: 50%;
    margin-bottom: 40px;
    margin-top: 40px;
}

#git {
    padding: 15px;
    border: none;
    border-radius: 20px;
}

h2 {
    font-size: 30px;
}
</style>
</x-guest-layout>
