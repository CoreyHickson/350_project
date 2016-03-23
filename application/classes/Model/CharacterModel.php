<?php defined('SYSPATH') OR die("No direct access allowed.");

class Model_CharacterModel extends Model {

	public function getAll() {
		try {
			$iterator = ORM::factory('Character')
                ->find_all()
                ->as_array();
			$iterator = ORM::factory('Character')
				->find_all()
				->as_array();

			foreach ($iterator as $character) {
				$data[] = $character->as_array();
			}

			return array('Characters' => $data);
		}
		catch (ORM_Validation_Exception $e) {
			return array(
				'status' => $e->errors()
			);
		}
	}

	public function get($name) {
		try {
			$iterator = ORM::factory('Character')
				->where('name', '=', $name)
				->find_all()
				->as_array();

			foreach ($iterator as $character) {
				$data[] = $character->as_array();
			}

			return array('Character' => $data);
		}
		catch (ErrorException $e)
        {

            return array(
                'status' => 'Data is Null',
                'cod'    => 'DATANULL',
            );
        }
        catch (Exception $e)
        {

            return array(
                'status' => 'Parametre no Exist',
                'cod'    => 'PARNEXS',
            );
        }
	}

	public function create($params) {
		$char = ORM::factory('Character');
		$char->name = $params['name'];
		$char->class = $params['class'];
		$char->charlevel = $params['charlevel'];
		$char->background = $params['background'];
		$char->race = $params['race'];

		$char->save();
		$char->loaded();

		return array(
			'status' => __('success'),
            'id' => $char->id,
            'name' => $char->name,
            'class' => $char->class,
            'charlevel' => $char->charlevel,
            'background' => $char->background,
            'race' => $char->race,
		);
	}

	public function update($params) {
		$char = ORM::factory('Character', $params['id']);

		$char->id = $params['id'];
	    $char->name = $params['name'];
		$char->class = $params['class'];
		$char->charlevel = $params['charlevel'];
		$char->background = $params['background'];
		$char->race = $params['race'];

		$char->save();
		$char->loaded();

		return array(
			'status' => __('success'),
            'id' => $char->id,
            'name' => $char->name,
            'class' => $char->class,
            'charlevel' => $char->charlevel,
            'background' => $char->background,
            'race' => $char->race,
		);
	}

	public function delete($params) {
		$char = ORM::factory('Character', $params['id']);
        $char->delete();
        return array(
            'status' => __('Deleted'),
            'id' => $params['id'],
        );
	}
}
