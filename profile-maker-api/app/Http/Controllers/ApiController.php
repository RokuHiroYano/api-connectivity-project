<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class ApiController extends Controller
{
    public function getAllMembers() {
        $members = Member::get()->toJson(JSON_PRETTY_PRINT);
        return response($members, 200);
    }

    public function getMember($id) {
        if (Member::where('id', $id)->exists()) {
            $member = Member::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
        return response($member, 200);
        } else {
            return response()->json([
                "message" => "Member not found"
            ], 404);
        }
    }

    public function createMember(Request $request) {
        $member = new Member;
        $member->id = $request->id;
        $member->name = $request->name;
        $member->name_furigana = $request->name_furigana;
        $member->gender = $request->gender;
        $member->age = $request->age;
        $member->route = $request->route;
        $member->near_station = $request->near_station;
        $member->license_year_1 = $request->license_year_1;
        $member->license_name_1 = $request->license_name_1;
        $member->knowledge = $request->knowledge;
        $member->pr = $request->pr;
        $member->start_date_1 = $request->start_date_1;
        $member->end_date_1 = $request->end_date_1;
        $member->occupation_1 = $request->occupation_1;
        $member->job_duties_1 = $request->job_duties_1;
        $member->tools_1 = $request->tools_1;
        $member->save();
        return response()->json([
            "message" => "Created Member"
        ], 200);
    }

    public function updateMember(Request $request, $id) {
        if (Member::where('id', $id)->exists()) {
            $member = Member::find($id);
            
            $member->id = $request->id;
            $member->name = $request->name;
            $member->name_furigana = $request->name_furigana;
            $member->gender = $request->gender;
            $member->age = $request->age;
            $member->route = $request->route;
            $member->near_station = $request->near_station;
            $member->license_year_1 = $request->license_year_1;
            $member->license_name_1 = $request->license_name_1;
            $member->knowledge = $request->knowledge;
            $member->pr = $request->pr;
            $member->start_date_1 = $request->start_date_1;
            $member->end_date_1 = $request->end_date_1;
            $member->occupation_1 = $request->occupation_1;
            $member->job_duties_1 = $request->job_duties_1;
            $member->tools_1 = $request->tools_1;
            $member->save();

            return response()->json([
                "message" => "records updated successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "Member not found"
            ], 404);
        }
    }

    public function deleteMember ($id) {
        if(Member::where('id', $id)->exists()) {
            $member = Member::find($id);
            $member->delete();

            return response()->json([
                "message" => "records deleted"
            ], 202);
        } else {
            return response()->json([
                "message" => "Member not found"
            ], 404);
        }
    }
}