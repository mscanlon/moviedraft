<?php namespace App;

use Illuminate\Support\Facades\DB;

class DraftBoard {
    
    private $draftId;
    
    public function __construct($draftId){
        $this->draftId = $draftId;
    }
    
    public function all(){
        return DB::table('draft_boards')->where('draft_id', $this->draftId)->get();
    }
    
}
