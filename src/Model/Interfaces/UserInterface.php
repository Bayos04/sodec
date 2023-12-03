<?php

namespace App\Model\Interfaces;

interface UserInterface
{
    public function create(array $user);

    public function activate(string $email);

    public function login(string $ident, string $password);

    public function update(array $user);

    public function delete(string $identifier);

    public function retrieveAll();

    public function retrieveSingle(string $name);

    public function retrieveByRole(int $role);

    public function lock(string $name);

    public function unlock(string $name);

    public function editProfile(array $file);

	public function editPassword(string $password, string $newPassword);

	public function editEmail(string $email, string $password, string $newEmail);

    public function setPreferences();

	public function enableTFA(string $email, string $password);
	public function disableTFA(string $email, string $password);
}