<!-- categories -->
<div class="widget widget-categories">
    <h4 class="widget-title"><span>Categories</span></h4>
    <ul class="list-unstyled widget-list">
        @foreach (App\Category::get() as $category)
            <li><a href="/categories/{{ $category->category_slug }}" class="d-flex">{{ $category->category_name }}</a>
            </li>
        @endforeach
    </ul>
</div>
