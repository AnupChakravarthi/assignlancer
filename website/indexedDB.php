<script type="text/javascript">
//prefixes of implementation that we want to test
window.indexedDB = window.indexedDB || window.mozIndexedDB || 
window.webkitIndexedDB || window.msIndexedDB;
         
//prefixes of window.IDB objects
window.IDBTransaction = window.IDBTransaction || window.webkitIDBTransaction || window.msIDBTransaction;
window.IDBKeyRange = window.IDBKeyRange || window.webkitIDBKeyRange ||  window.msIDBKeyRange;
         
if(window.indexedDB) {
  console.log("Your browser supports a stable version of IndexedDB.")
}

function createBrowserDataBase(dbName, version, success, error, onupgrade){
 let openRequest = window.indexedDB.open(dbName, version);
 openRequest.onsuccess = success();
 openRequest.onerror = error();
 openRequest.onupgradeneeded = onupgrade();
}

function deleteBrowserDatabase(dbName){
 let deleteRequest = indexedDB.deleteDatabase(dbName);
}
</script>