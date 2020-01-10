// build.rs
extern crate cbindgen;

use std::env;
use std::io::prelude::*;
use std::fs::File;

fn main() -> std::io::Result<()> {
    let crate_dir = env::var("CARGO_MANIFEST_DIR").unwrap();

    let mut file = File::create("points.h")?;

    writeln!(file, "#define FFI_SCOPE \"POINTS\"")?;
    writeln!(file, "#define FFI_LIB \"./target/release/libpoints.so\"")?;

    cbindgen::generate(&crate_dir)
        .unwrap()
        .write(file);

    Ok(())
}
