<?php

namespace App\Livewire\Backend;

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\MediaLink;
use Illuminate\Support\Facades\Auth;

class SocialLink extends Component
{
    #[Validate('required')]
    public $link_icon;
    #[Validate('required')]
    public $following_link;

    public function bring_icon($icon_class){
        $this->link_icon = $icon_class;
    }

    public function social_link_insert(){
        $this->validate();
        MediaLink::insert([
            'blogger_id'=>Auth::id(),
            'link_icon'=>$this->link_icon,
            'following_link'=>$this->following_link,
            'created_at'=>now(),
        ]);
        $this->reset();
        session()->flash('SoclAdMsg', 'Social Link Successfully Added.');
    }

    public function edit_icon($id){
        $edit_socials = MediaLink::where('id',$id)->first();
        $this->link_icon = $edit_socials->link_icon;
        $this->following_link = $edit_socials->following_link;
    }

    public function social_link_update($id){
        MediaLink::find($id)->update([
            'link_icon'=>$this->link_icon,
            'following_link'=>$this->following_link,
            'updated_at'=>now(),
        ]);
        session()->flash('SoclEdtMsg', 'Social Link Successfully Updated.');
    }

    public function delete_social($id) {
        MediaLink::find($id)->delete();
    }

    public function render()
    {
        $media_links = MediaLink::all();
        return view('livewire.backend.social-link',compact('media_links'));
    }
}
