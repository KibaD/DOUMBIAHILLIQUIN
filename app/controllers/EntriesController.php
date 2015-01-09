<?php

class EntriesController extends BaseController {

        # Handles "GET /" request
        public function getCritiques()
        {
        return View::make('critiques')->with('entries', Entries::all());

        }

        # Handles "POST /"  request
        public function postCritiques()
        {
        
        // get form input data
    	$entry = array(
        'username' => Input::get('Name'),
        'email'    => Input::get('Email'),
        'comment'  => Input::get('Comment'),
      
        
    );

    // save the critiques entry to the database
    Entries::create($entry);
 
    return Redirect::to('/');
        }

		public function deleteCritiques () { 
			
			entries::find(Input::get('id'))->delete();
			return Redirect::to('/');
		}
		
		public function get_edit($id) {
		
		return View::make('edit')
			->with('title', 'Edit critiques')
			->with('entries', entries::find($id));
		}
	
		public function put_update() {
		
		$id = Input::get('id');

	
			/*entries::update($id, array(
				'username' => Input::get('name'),
       			'email'    => Input::get('email'),
       			'comment'  => Input::get('comment'),
			));*/
			
			    entries::find($id)->update(Input::all());

			return Redirect::to('/');
		}
	
}

