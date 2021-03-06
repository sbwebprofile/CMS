<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories_model extends CI_Model
{
	/**
	 * Get all category names.
	 */
	public function all()
	{
		// Count the pages per category.
		$this->db->select('category_id, COUNT(page_id) AS page_count');
		$this->db->group_by('category_id');
		$counts = $this->db->get_compiled_select('categories');

		// Join the counts with the categories.
		$this->db->join("($counts) AS counts", 'id = category_id', 'LEFT');
		$result = $this->db->get('category_names')->result();

		// Check for empty counts.
		foreach ($result as $row)
			if (empty($row->page_count))
				$row->page_count = 0;

		return $result;
	}

	/**
	 * Get a category by its id.
	 */
	public function get($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('category_names')->row();
	}

	/**
	 * Get a category by its name.
	 */
	public function getByName($name)
	{
		$this->db->where('name', $name);
		return $this->db->get('category_names')->row();
	}

	/**
	 * Remove a category.
	 */
	public function remove($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('category_names');
	}

	/**
	 * Create a new category.
	 */
	public function create($name)
	{
		$this->db->insert('category_names', ['name' => $name]);
	}

	/**
	 * Set the categories for a page.
	 */
	public function set($pageId, $catIds)
	{
		// Clear the page from the categories list.
		$this->db->where('page_id', $pageId);
		$this->db->delete('categories');

		// Insert the new categories.
		foreach ($catIds as $category)
		{
			$data = [
				'page_id' => $pageId,
				'category_id' => $category
			];
			$this->db->insert('categories', $data);
		}
	}

	/**
	 * Update a category.
	 */
	public function update($id, $name)
	{
		$this->db->where('id', $id);
		return $this->db->update('category_names', ['name' => $name]);
	}
}