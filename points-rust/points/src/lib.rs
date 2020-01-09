
#[repr(C)]
pub struct Point {
    pub x: u8,
    pub y: u8,
}

pub fn distance(p1: Point, p2: Point) -> f64 {
    let a_squared = (p2.x as f64 - p1.x as f64).powf(2.0);
    let b_squared = (p2.y as f64 - p1.y as f64).powf(2.0);

    (a_squared + b_squared).sqrt()
}


#[no_mangle]
pub unsafe extern "C" fn compute_distance(p1: Point, p2: Point) -> f64 {
    distance(p1, p2)
}
