<div class="widget categories-widget">
    <h5 class="widget-title">Categories</h5>
    <ul class="custom">
        @foreach($topCategories as $category)
            <li>
                <a href="javascript:void(0)">{{ $category->category }} <span class="badge rounded">{{ $category->count }}</span></a>
            </li>
        @endforeach
    </ul>
</div>
