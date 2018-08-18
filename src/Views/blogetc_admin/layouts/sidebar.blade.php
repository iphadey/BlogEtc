<h2><a href='https://webdevetc.com/'>WebDevEtc.com</a> BlogEtc Admin Panel</a></h2>
<p>Welcome to the admin panel for your blog posts.</p>


<ul class="list-group mb-3">
    <li class="list-group-item justify-content-between lh-condensed">
        <div>
            <h6 class="my-0"><a href="{{ route('blogetc.admin.index') }}">BlogEtc Admin Home</a>
             <span class="text-muted">(<?
                 $categoryCount = \WebDevEtc\BlogEtc\Models\BlogEtcPost::count();

                 echo $categoryCount . " " . str_plural("Post", $categoryCount);

                 ?>)</span>
            </h6>
            <small class="text-muted">Overview of your posts</small>

            <div class="list-group ">

                <a href='{{ route('blogetc.admin.index') }}'
                   class='list-group-item list-group-item-action @if(\Request::route()->getName() == 'blogetc.admin.index') active @endif  '><i
                            class="fa fa-th fa-fw"
                            aria-hidden="true"></i>
                    All Posts</a>
                <a href='{{ route('blogetc.admin.create_post') }}'
                   class='list-group-item list-group-item-action  @if(\Request::route()->getName() == 'blogetc.admin.create_post') active @endif  '><i
                            class="fa fa-plus fa-fw" aria-hidden="true"></i>
                    Add Post</a>
            </div>
        </div>

    </li>


    <li class="list-group-item justify-content-between lh-condensed">
        <div>
            <h6 class="my-0"><a href="{{ route('blogetc.admin.comments.index') }}">Comments</a>

                            <span class="text-muted">(<?
                                $commentCount = \WebDevEtc\BlogEtc\Models\BlogEtcComment::count();

                                echo $commentCount . " " . str_plural("Comment", $commentCount);

                                ?>)</span>
            </h6>
            <small class="text-muted">Manage your comments</small>

            <div class="list-group ">
                <a href='{{ route('blogetc.admin.comments.index') }}'
                   class='list-group-item list-group-item-action  @if(\Request::route()->getName() == 'blogetc.admin.comments.index') active @endif   '><i
                            class="fa  fa-fw fa-comments" aria-hidden="true"></i>
                    All Comments</a>
            </div>
        </div>
    </li>


    <li class="list-group-item  justify-content-between lh-condensed">
        <div>
            <h6 class="my-0"><a href="{{ route('blogetc.admin.categories.index') }}">Categories</a>


                                        <span class="text-muted">(<?
                                            $postCount = \WebDevEtc\BlogEtc\Models\BlogEtcCategory::count();
                                            echo $postCount . " " . str_plural("Post", $postCount);
                                            ?>)</span>


            </h6>


            <small class="text-muted">Blog post categories</small>

            <div class="list-group ">
                <a href='{{ route('blogetc.admin.categories.index') }}'
                   class='list-group-item list-group-item-action  @if(\Request::route()->getName() == 'blogetc.admin.categories.index') active @endif  '><i
                            class="fa fa-object-group fa-fw" aria-hidden="true"></i>
                    All Categories</a>
                <a href='{{ route('blogetc.admin.categories.create_category') }}'
                   class='list-group-item list-group-item-action  @if(\Request::route()->getName() == 'blogetc.admin.categories.create_category') active @endif  '><i
                            class="fa fa-plus fa-fw" aria-hidden="true"></i>
                    Add Category</a>
            </div>
        </div>

    </li>


</ul>