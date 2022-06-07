<!-- node status btn -->
<div :title="behindTitle" class="d-flex align-items-center mx-3">
    <a class="text-center" style="font-size: .7em;" :class="{'text-success':'behind < 30'}" :class="{'text-warning':'behind >= 30 && behind < 60'}" :class="{'text-danger':'behind >= 60'}" type="button" data-toggle="collapse" data-target="#nodedrawer" aria-expanded="false" aria-controls="nodedrawer">
        <span class=" p-0 m-0">
            <i class="fas fa-circle mr-2">

            </i>
            <span class=" p-0 m-0" v-show="behind < 30">ONLINE</span>
            <span class=" p-0 m-0" v-show="behind >= 30 && behind <=100">LAGGING</span>
            <span class=" p-0 m-0" v-show="behind > 100">OFFLINE</span></span>
        <span class="p-0 m-0 ml-1">({{runners.length}}
            <i class="fas fa-user-lock">

            </i>)
        </span>
    </a>
</div>
