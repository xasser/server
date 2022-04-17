<?php

class DFileType {
  const TEMPORARY = 100;
  const WORDLIST  = 0;
  const RULE      = 1;
  const OTHER     = 2;
}

class DFileAction {
  const DELETE_FILE      = "deleteFile";
  const DELETE_FILE_PERM = DAccessControl::ADD_FILE_ACCESS;
  
  const SET_SECRET      = "setSecret";
  const SET_SECRET_PERM = DAccessControl::MANAGE_FILE_ACCESS;
  
  const ADD_FILE      = "addFile";
  const ADD_FILE_PERM = DAccessControl::ADD_FILE_ACCESS;
  
  const EDIT_FILE      = "editFile";
  const EDIT_FILE_PERM = DAccessControl::MANAGE_FILE_ACCESS;
}
