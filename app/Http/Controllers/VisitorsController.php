<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Subscribers; 
use App\Visitors;
use Response;
use DB;
use Validator;

class VisitorsController extends Controller
{
	public function saveSubscriber (Request $request)
	{
		

		$rules = [
			'sub' => 'required | unique:subscribers,email',
			
		];

		$messages = [
			'sub.required' => 'Email is required!',
			'sub.unique' => ' Email is already taken!',
			

		];

		$validation = Validator::make($request->all(), $rules, $messages);

        // redirect on validation error
		if ($validation->fails()) {
			$errorMsgString = implode("<br/>",$validation->messages()->all());
			return Response::json(array('success' => false, 'heading' => 'Validation Error', 'message' => $errorMsgString), 400);
		}


		DB::beginTransaction();

		try {

			$sub = new Subscribers;
			$sub->email = $request->sub;
			


			if($sub->save()){
				DB::commit();
				return Response::json(array('success' => TRUE, 'data' => $sub), 200);
			}

			else{

				DB::rollback();
				return Response::json(array('success' => FALSE, 'heading' => 'Insertion Failed', 'message' => 'Sorry, You are not a Subscriber yet'), 400);

			}

		}
		
		catch (\Exception $e) {
			echo $e;
			DB::rollback();
			return Response::json(array('success' => FALSE, 'heading' => 'Insertion Failed', 'message' => 'Sorry, You are not a Subscriber yet'), 400);
		}
		
	}

	public function saveVisitor(Request $request){
		$bandiHit= Visitors::select('visitors.visit_count_day')->first();
		if(!isset($bandiHit->visit_count_day)){
			$hit = new Visitors;
			$hit->visit_count_day=1;
			$hit->visit_count_week =0;
			$hit->visit_count_month =0;
			$hit->visit_count_year =0;

			if($hit->save()){
				DB::commit();
				return Response::json(array('success' => TRUE, 'data' => $hit), 200);
			}

			else{

				DB::rollback();
				return Response::json(array('success' => FALSE, 'heading' => 'Insertion Failed', 'message' => 'Sorry, You are not a Subscriber yet'), 400);

			}
		}
		else {
			$hit = Visitors::find(1);
			$hit->visit_count_day = $request->hit +$bandiHit->visit_count_day;

			if($hit->save()){
				DB::commit();
				return Response::json(array('success' => TRUE, 'data' => $hit), 200);
			}

			else{

				DB::rollback();
				return Response::json(array('success' => FALSE, 'heading' => 'Insertion Failed', 'message' => 'Sorry, You are not a Subscriber yet'), 400);

			}

		}



	}

	public function seeVisitor(){
		$bandiHit= Visitors::select('visitors.visit_count_day')->first();
		return Response::json(['success' => true, 'data' => $bandiHit], 200);
	}



	
	
}
