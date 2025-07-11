<?php

/**
 * UserProfile service interface.
 */

namespace App\Service;

use App\Entity\UserAuth;
use App\Entity\UserProfile;

/**
 * Interface UserProfileServiceInterface.
 */
interface UserProfileServiceInterface
{
    /**
     * Save entity.
     *
     * @param UserProfile $profile UserProfile entity
     */
    public function save(UserProfile $profile): void;

    /**
     * Delete entity.
     *
     * @param UserProfile $profile UserProfile entity
     */
    public function delete(UserProfile $profile): void;

    /**
     * Create a new profile for a user.
     *
     * @param UserAuth $userAuth    UserAuth entity
     * @param array    $profileData Array of profile data (e.g., imie, nazwisko, szkola)
     *
     * @return UserProfile New profile entity
     */
    public function createProfile(UserAuth $userAuth, array $profileData): UserProfile;

    /**
     * Find profiles by school.
     *
     * @param string $school School name
     *
     * @return UserProfile[] Array of profiles
     */
    public function findBySchool(string $school): array;

    /**
     * Update profile data.
     *
     * @param UserProfile $profile     UserProfile entity
     * @param array       $profileData Array of profile data
     *
     * @return UserProfile Updated profile entity
     */
    public function updateProfile(UserProfile $profile, array $profileData): UserProfile;
}
