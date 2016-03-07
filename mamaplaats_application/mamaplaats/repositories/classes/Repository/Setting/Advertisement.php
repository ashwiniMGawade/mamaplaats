<?php

interface Repository_Setting_Advertisement {

	/**
	 * @param array $parameters
	 * @return Entity_Setting_AdvertisementPopup
	 */
	public function load_object(array $parameters);

	/**
	 * @param array $parameters
	 * @return Entity_Setting_AdvertisementPopup[]
	 */
	public function load_set(array $parameters);

	/**
	 * @param Entity_Setting_AdvertisementPopup $entity
	 * @return Entity_Setting_AdvertisementPopup
	 */
	public function create($entity);

	/**
	 * @param Entity_Setting_AdvertisementPopup $entity
	 * @return Entity_Setting_AdvertisementPopup
	 */
	public function update($entity);

	/**
	 * @param Entity_Setting_AdvertisementPopup $entity
	 * @return Entity_Setting_AdvertisementPopup
	 */
	public function delete($entity);
}