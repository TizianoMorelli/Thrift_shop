<div class="container my-5">
    <div class="row d-flex">
        @foreach ($announcements as $announcement)
            <x-card
            :$announcement
            />
        @endforeach
    </div>
</div>
