<?php

namespace App\Http\Controllers;

use App\Models\Building;
use App\Models\Room;
use Illuminate\Http\Request;
use Validator;

class BuildingRoomController extends Controller
{
    public function index($building_id)
    {
        $building = Building::findOrFail($building_id);
        $rooms = $building->rooms;
        return view('building.room.index')
            ->with('building', $building)
            ->with('rooms', $rooms);
    }

    public function create($building_id)
    {
        $building = Building::findOrFail($building_id);
        $equipments = Room::$equipments;
        return view('building.room.create')
            ->with('building', $building)
            ->with('equipments', $equipments);
    }

    public function store($building_id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'       => 'required',
            'equipments' => 'required',
        ]);
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $building = Building::findOrFail($building_id);
        $ins = $request->all();
        $ins['building_id'] = $building->id;
        $room = Room::create($ins);
        return redirect()->route('buildings.rooms.index', $building->id);
    }

    public function show($building_id, $room_id)
    {
        $building = Building::findOrFail($building_id);
        $room = Room::findOrFail($room_id);
        return view('building.room.show')
            ->with('building', $building)
            ->with('room', $room);
    }

    public function edit($building_id, $room_id)
    {
        $building = Building::findOrFail($building_id);
        $room = Room::findOrFail($room_id);
        return view('building.room.edit')
            ->with('building', $building)
            ->with('room', $room);
    }

    public function update($building_id, $room_id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'       => 'required',
            'equipments' => 'required',
        ]);
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        $building = Building::findOrFail($building_id);
        $room = Room::findOrFail($room_id);
        $room->fill($request->all());
        $room->save();
        return redirect()->route('buildings.rooms.show', [$building->id, $room->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
