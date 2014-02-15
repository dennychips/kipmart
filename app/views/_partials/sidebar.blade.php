<div class="col-lg-3 hidden-sm hidden-xs hidden-md">
<aside class="panel">
      <div class="text-center clearfix bg-white">
        <img src="http://www.gravatar.com/avatar/c0f502ad15f19b2ccb8105fcb7b35e20?s=320">
      </div>
      <div class="bg-light padder padder-v">
        <span class="h4">{{ Auth::user()->firstname .' '. Auth::user()->lastname}}</span>
      </div>
      <div class="list-group list-normal m-b-none">
        <a href="#" class="list-group-item">Profile</a>
        <a href="#" class="list-group-item">Group</a>
        <a href="#" class="list-group-item">Following</a>
        <a href="#" class="list-group-item">Followers</a>
        <a href="#" class="list-group-item">Posts</a>
      </div>
    </aside>
</div>